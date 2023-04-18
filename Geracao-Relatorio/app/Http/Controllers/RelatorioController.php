<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RelatorioController extends Controller
{
    //Filtra dados no banco
    public function ExibeCampos(){

        return view("pages.relatorio");
    }

    public function FiltraDados(Request $request){

        dd($request);

        // $post_name = "";

        // if($request->cpf)
        // {
        //     $wp_users = DB::table('wp_users')->where('user_login', '=', $request->cpf)->get();

        //     $wp_posts = DB::table('wp_posts')->where('post_author', '=', $wp_users[0]->ID)
        //     ->whereBetween('post_date', ["{$request->fdate} 00:00:00", "{$request->sdate} 23:59:59"])->get();

            // $wp_postmeta = DB::table('wp_postmeta')->where('')->get();

        //     dd($wp_posts);
        // }else
        // {
        //     $wp_posts = DB::table('wp_posts')->whereBetween('post_date', ["{$request->fdate} 00:00:00", "{$request->sdate} 23:59:59"])->get();

        //     $post_name = substr($wp_posts[7]->post_name, 0, 3);

        //     dd($post_name);
        // }




        return view("pages.relatorio");
    }
}
