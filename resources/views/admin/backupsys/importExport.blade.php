@extends('admin.layout.admin')
@section('content')
	
		<a href="{{ url('downloadExcel/xls') }}"><button class="btn btn-success">Back up CV Records xls</button></a>
		<a href="{{ url('downloadExcel/xlsx') }}"><button class="btn btn-success">Back up CV Records xlsx</button></a>
		<a href="{{ url('downloadExcel/csv') }}"><button class="btn btn-success">Back up CV Records CSV</button></a>
<br/>
<hr>
	<!-- 	<a href="{{ url('downloadExcel/xls') }}"><button class="btn btn-success">Back up CV Records xls</button></a>
		<a href="{{ url('downloadExcel/xlsx') }}"><button class="btn btn-success">Back up CV Records xlsx</button></a>
		<a href="{{ url('backUpDocumentProfession/csv') }}"><button class="btn btn-success">Complete backup CV Records CSV</button></a>
	   -->

@endsection
