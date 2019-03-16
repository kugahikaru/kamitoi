<?php

// PostController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;
// use App\Post;
use App\CertificateImage ;
use Image;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $title = $request->get('title');
        $body = $request->get('body');
        $base_img_file_path = public_path('images/base_'. $title .'_'.date("Ymd").'.png');
        $file_path = public_path('images/'. $title .'_'.date("Ymd").'.jpg');
        $img_base = Image::make(public_path('images/white.jpeg'))->fit(400,290);
        $img_base->text($body, 120, 25, function($font) {
            $font->file(public_path('fonts/irohakakuC-Regular.ttf'));
            $font->size(40);
            $font->color('#6E6E6E');
            $font->align('center');
            $font->valign('top');
            // $font->angle(45);
        });
        $img_base->opacity(70);
        $img_base->save($base_img_file_path);

        $img = Image::make(public_path('images/kamitoi-base-1.jpg'))->fit(512, 384);
        $img->insert($base_img_file_path,'center');
        // $img->text($body, 256, 192, function($font) {
        //     $font->file(public_path('fonts/irohakakuC-Regular.ttf'));
        //     $font->size(40);
        //     $font->color('#6E6E6E');
        //     $font->align('center');
        //     $font->valign('top');
        //     // $font->angle(45);
        // });
        $img->save($file_path);
        $image = new CertificateImage([
            'file_path' => $file_path
        ]);
        $image->save();
        // $post = new Post([
        //     'title' => $request->get('title'),
        //     'body' => $request->get('body')
        // ]);

        // $post->save();

        return response()->json('successfully added');
    }

        public function index()
        {
        // return new PostCollection(Post::all());
        return;
        }

        public function edit($id)
        {
        // $post = Post::find($id);
        // return response()->json($post);
        // }

        // public function update($id, Request $request)
        // {
        // $post = Post::find($id);

        // $post->update($request->all());

        return response()->json('successfully updated');
        }

        public function delete($id)
        {
        // $post = Post::find($id);

        // $post->delete();

        return response()->json('successfully deleted');
    }
}