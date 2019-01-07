@extends('admin.layouts.main')
@section('content')
<div class="page-header">
  <div class="page-header-main">
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Сотрудники</li>
    </ol>
    <a class="ml-auto btn btn-success" href="#" data-toggle="modal" data-target="#employeeAdd" role="button">Добавить сотрудника</a>
  </div>
</div>
<div class="page-content">
  <div class="card">
    <table class="table table-hover">
      <thead>
        <tr>
          <th width="8%">ID</th>
          <th width="62%">Имя и фамилия</th>
          <th width="30%">Отдел</th>
          <th width="0%"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>15</td>
          <td><a class="font-weight-bold" data-toggle="modal" data-target="#employeeView">Jaloliddin Kholmatov</a></td>
          <td>Разработчики</td>
          <td>
            <div class="table-action">
              <a class="btn btn-icon" href="/employees/edit" title="Редактировать"><i class="icon icon-edit"></i></a>
            </div>
          </td>
        </tr>
        <tr>
          <td>25</td>
          <td><a class="font-weight-bold" data-toggle="modal" data-target="#employeeView">Jaloliddin Kholmatov</a></td>
          <td>Оператори</td>
          <td>
            <div class="table-action">
              <a class="btn btn-icon" href="/employees/edit" title="Редактировать"><i class="icon icon-edit"></i></a>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@include('admin.employees.add')
@include('admin.employees.view')
@endsection