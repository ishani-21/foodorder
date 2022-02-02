<?php

namespace App\Repositories;

use App\Contracts\NewsContract;
use App\Models\News;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class NewsRepository implements NewsContract
{
	public function store(array $array)
	{
		$data = new News;
        $data->title = $array['title'];
        $data->description = $array['description'];
        if(isset($array['image1']))
        {
            $file = $array['image1'];
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_news.'.$extension;
            $file->move('assets/image/news',$filename);
            $data->image1 = $filename;
        }
        $data->save();
        return $data;
	}
    public function show($id)
    {
        $data = News::find($id);
        return $data;
    }
    public function edit($id)
    {
        $data = News::find($id);
        return $data;
    }
    public function update(array $array,$id)
    {
    	$data = News::find($id);
        $data->title = $array['title'];
        $data->description = $array['description'];
        if(isset($array['image1']))
        {
            $file = $array['image1'];
            $extension =$file->getclientoriginalextension();
            $filename = rand().'_news.'.$extension;
            $file->move('assets/image/news',$filename);
            $data->image1 = $filename;
        }
        $data->save();
        return $data;
    }
    public function destroy($id)
    {
    	$news = News::find($id);
        $destination = 'assets/image/news/'.$news->image1;
        if(file::exists($destination))
        {
            file::delete($destination);
        }
        $news->delete();
    }
}

?>