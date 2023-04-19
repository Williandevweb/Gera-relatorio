<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class RelatorioController extends Controller
{
    //Filtra eventos
    public function ExibeCampos(){

        $wp_posts = DB::table('wp_posts')->get();

        return view("pages.relatorio", compact('wp_posts'));
    }

    //Filtra dados para Relatório PDF
    public function FiltraDados(Request $request){

        if($request->check == "todos"){

            if($request->cpf)
            {

                $usuario = DB::table('wp_users')
                    ->where('user_login', '=', $request->cpf)->first();

                $posts = DB::table('wp_posts')
                    ->where('post_author', '=', $usuario->ID)
                    ->whereBetween('post_date', ["{$request->fdate} 00:00:00", "{$request->sdate} 23:59:59"])
                    ->join('wp_postmeta', 'wp_posts.ID', '=', 'wp_postmeta.post_id')
                    ->join('wp_users', 'wp_posts.post_author', '=', 'wp_users.ID')->get();

                $pdf = PDF::loadView('pages.pdf', compact('posts'));

                return $pdf->setPaper('a4')->stream('Relatório.pdf');

            }else
            {
                $usuario = DB::table('wp_users')->first();

                $posts = DB::table('wp_posts')
                    ->whereBetween('post_date', ["{$request->fdate} 00:00:00", "{$request->sdate} 23:59:59"])
                    ->join('wp_postmeta', 'wp_posts.ID', '=', 'wp_postmeta.post_id')
                    ->join('wp_users', 'wp_posts.post_author', '=', 'wp_users.ID')->get();

                    $pdf = PDF::loadView('pages.pdf', compact('posts'));

                    return $pdf->setPaper('a4')->stream('Relatório.pdf');
            }

        }else{
            if($request->cpf)
            {
                $usuario = DB::table('wp_users')
                    ->where('user_login', '=', $request->cpf)->first();

                $posts = DB::table('wp_posts')
                    ->where('post_author', '=', $usuario->ID)
                    ->where('post_title', '=', $request->evento)
                    ->whereBetween('post_date', ["{$request->fdate} 00:00:00", "{$request->sdate} 23:59:59"])
                    ->join('wp_postmeta', 'wp_posts.ID', '=', 'wp_postmeta.post_id')
                    ->join('wp_users', 'wp_posts.post_author', '=', 'wp_users.ID')->get();

                    $pdf = PDF::loadView('pages.pdf', compact('posts'));

                    return $pdf->setPaper('a4')->stream('Relatório.pdf');
            }else
            {
                $usuario = DB::table('wp_users')->first();

                $posts = DB::table('wp_posts')
                    ->where('post_title', '=', $request->evento)
                    ->whereBetween('post_date', ["{$request->fdate} 00:00:00", "{$request->sdate} 23:59:59"])
                    ->join('wp_postmeta', 'wp_posts.ID', '=', 'wp_postmeta.post_id')
                    ->join('wp_users', 'wp_posts.post_author', '=', 'wp_users.ID')->get();

                    $pdf = PDF::loadView('pages.pdf', compact('posts'));

                    return $pdf->setPaper('a4')->stream('Relatório.pdf');
            }
        }
    }
}
