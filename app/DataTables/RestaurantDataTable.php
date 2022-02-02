<?php

namespace App\DataTables;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
class RestaurantDataTable extends DataTable
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
            // ->addColumn('action', 'restaurant.action');
            
            // ->filter(function ($instance) use ($request) {
            //     if ($request->get('status') == '0' || $request->get('status') == '1') {
            //         $instance->where('status', $request->get('status'));
            //     }
            //     if (!empty($request->get('search'))) {
            //          $instance->where(function($w) use($request){
            //             $search = $request->get('search');
            //             $w->orWhere('name', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%");
            //         });
            //     }
            // })

            ->addColumn('action', function ($data) {
                if($data->status == "1"){
                    $result = '<div class="btn-group">';
                    $result .= '<a href="'.route("admin.restaurant.show",$data->id).'"><button class="btn-sm btn-outline-dark">Show</button></a>';
                    $result .= '<a href="'.route("admin.restaurant.edit",$data->id).'"><button class="btn-sm btn-outline-primary">Edit</button></a>';
                    $result .= '
                   <form action="'.route("admin.restaurant.destroy",$data->id).'" method="POST">
                   '.csrf_field().'
                   '.method_field("DELETE").'
                   <button type="submit" class="btn-sm btn-outline-danger" onclick="return confirm("Are You Sure Want to Delete?")">Delete</button></form></div>';
                    return $result;
                }else{
                    return "it's restaurant is Inactive....";
                 }
            })
            ->editColumn('image', function($data){
                return '<img src="'.asset('assets/image/restaurant/'.$data->image).'"class="rounded" width="50px"></img>';
            })

            ->editColumn('status', function($data){
                if($data->status == "1")
                {
                    return "<a href='".route("admin.changestatus",$data->id)."'><button class='btn-sm btn-success status'>Active</button></a>";
                }else{
                    return "<a href='".route("admin.changestatus",$data->id)."'><button class='btn-sm btn-danger status'>Inactive</button></a>";
                }
            })
            ->rawColumns(['action','image','status'])
            ->addIndexColumn();
    }

     /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Restaurant $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Restaurant $model, Request $request)
    {
        if (isset($request->type)) {
            $model =  $model->where('status', $request->type);
        }
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('restaurant-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(0)
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
            Column::make('id')->data('DT_RowIndex'),
            Column::make('name'),
            Column::make('mobile'),
            Column::make('email'),
            Column::make('address'),
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
        return 'Restaurant_' . date('YmdHis');
    }
}
