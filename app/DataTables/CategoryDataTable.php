<?php

namespace App\DataTables;

use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CategoryDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            // ->addColumn('action', 'category.action');    
            ->addColumn('action', function ($data) {
                if($data->status == "1"){
                $result = '<div class="btn-group">';
                $result .= '<a href="'.route("admin.category.show",$data->id).'"><button class="btn-sm btn-outline-dark">Show</button></a>';
                $result .= '<a href="'.route("admin.category.edit",$data->id).'"><button class="btn-sm btn-outline-primary">Edit</button></a>';
                $result .= '
               <form action="'.route("admin.category.destroy",$data->id).'" method="POST">
               '.csrf_field().'
               '.method_field("DELETE").'
               <button type="submit" class="btn-sm btn-outline-danger" onclick="return confirm("Are You Sure Want to Delete?")">Delete</button></form></div>';
                return $result;
                }else{
                    return "It's Category is Inactive";
                }
            })
            ->editColumn('image', function($data){
            if($data->image){
                return '<img src="'.asset('assets/image/category/'.$data->image).'" width="50px"></img>';
            } else {
                return '<img src="'.asset('assets/image/category/'.$data->image).'" width="50px">';
            }
            })
            ->editColumn('status', function($data){
                if($data->status == "1")
                {
                    return "<a href='".route("admin.changecategory",$data->id)."'><button class='btn-sm btn-success'>Active</button></a>";
                }else{
                    return "<a href='".route("admin.changecategory",$data->id)."'><button class='btn-sm btn-danger'>Inactive</button></a>";
                }
            })
            ->editColumn('restaurants_id', function ($data) {
                return $data->restaurent['name'];
            })
            ->rawColumns(['action','image','status','restaurants_id'])
            ->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Category $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Category $model, Request $request)
    {
        if (isset($request->type)) {
            $model =  $model->where('status', $request->type);
        }
        return $model->with('restaurent')->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('category-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Blfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('restaurants_id')->title('Restaurant Name'),
            Column::make('name'),
            Column::make('image'),
            Column::make('status'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)   
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Category_' . date('YmdHis');
    }
}
