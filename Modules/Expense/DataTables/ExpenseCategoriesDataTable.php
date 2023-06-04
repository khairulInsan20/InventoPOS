<?php

namespace Modules\Expense\DataTables;

use Modules\Expense\Entities\ExpenseCategory;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ExpenseCategoriesDataTable extends DataTable
{

    public function dataTable($query) {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($data) {
                return view('expense::categories.partials.actions', compact('data'));
            });
    }

    public function query(ExpenseCategory $model) {
        return $model->newQuery()->withCount('expenses');
    }

    public function html() {
        return $this->builder()
            ->setTableId('expensecategories-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom("<'row'<'col-md-3'l><'col-md-5 mb-2'B><'col-md-4'f>> .
                                'tr' .
                                <'row'<'col-md-5'i><'col-md-7 mt-2'p>>")
            ->orderBy(4)
            ->buttons(
                Button::make('excel')
                    ->text('<i class="bi bi-file-earmark-excel-fill"></i> Excel'),
                Button::make('print')
                    ->text('<i class="bi bi-printer-fill"></i> Cetak'),
                Button::make('reset')
                    ->text('<i class="bi bi-x-circle"></i> Reset'),
                Button::make('reload')
                    ->text('<i class="bi bi-arrow-repeat"></i> Reload')
            );
    }

    protected function getColumns() {
        return [
            Column::make('category_name')
            ->title('Nama Kategori')
                ->addClass('text-center'),

            Column::make('category_description')
            ->title('Deskripsi Kategori')
                ->addClass('text-center'),

            Column::make('expenses_count')
            ->title('Jumlah Beban')
                ->addClass('text-center'),

            Column::computed('action')
            ->title('Aksi')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),

            Column::make('created_at')
                ->visible(false)
        ];
    }

    protected function filename() {
        return 'ExpenseCategories_' . date('YmdHis');
    }
}
