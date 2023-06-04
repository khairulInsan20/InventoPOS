<?php

namespace Modules\Expense\DataTables;

use Modules\Expense\Entities\Expense;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ExpensesDataTable extends DataTable
{

    public function dataTable($query) {
        return datatables()
            ->eloquent($query)
            ->addColumn('amount', function ($data) {
                return format_currency($data->amount);
            })
            ->addColumn('action', function ($data) {
                return view('expense::expenses.partials.actions', compact('data'));
            });
    }

    public function query(Expense $model) {
        return $model->newQuery()->with('category');
    }

    public function html() {
        return $this->builder()
            ->setTableId('expenses-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom("<'row'<'col-md-3'l><'col-md-5 mb-2'B><'col-md-4'f>> .
                                'tr' .
                                <'row'<'col-md-5'i><'col-md-7 mt-2'p>>")
            ->orderBy(6)
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
            Column::make('date')
            ->title('Tanggal')
                ->className('text-center align-middle'),

            Column::make('reference')
            ->title('Referensi')
                ->className('text-center align-middle'),

            Column::make('category.category_name')
                ->title('Kategori')
                ->className('text-center align-middle'),

            Column::computed('amount')
            ->title('Jumlah')
                ->className('text-center align-middle'),

            Column::make('details')
            ->title('Rincian')
                ->className('text-center align-middle'),

            Column::computed('action')
            ->title('Aksi')
                ->exportable(false)
                ->printable(false)
                ->className('text-center align-middle'),

            Column::make('created_at')
                ->visible(false)
        ];
    }

    protected function filename() {
        return 'Expenses_' . date('YmdHis');
    }
}
