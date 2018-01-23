@extends('templates.layout')
@section('title','TO DO APP')
@section('konten')
	<div class='container'>
		<div id='todo-title'>
			<h3>TO DO List - Laravel, Juery Ajax</h3>
		</div>
		<div id='todo-konten'>
			<ul id='tabs-swipe' class='tabs'>
				<li class='tab col s3'><a href='#todo-swipe-1' class='active'>TO DO</a></li>
			</ul>
			<div id='todo-swipe-1' class='col s12'>
				<div id='todo-form' class='row'>
					{{ Form::open([	'url' 	=> URL::to('proses/todo/save'),
									'id'  	=> 'todo_add', 
									'valid' => URL::to('proses/todo/validtodo') ]) }}
						<div class='row'>
							<div class='input-field col s10'>
								<div>
									<input id='konten_todo' name='data[konten]' type='text'>
									<label for='konten_todo'>Inputkan data anda disini</label>
								</div>
								<p class='label-error'></p>
							</div>
							<div class='input-field col s2'>
								<button type='submit' class='waves-effect waves-light btn'>
									Add
								</button>
							</div>
						</div>
					{{ Form::close() }}
				</div>
				<div>
					<div class="col s6">
						<button id='deleteall' type='submit' action='{{ URL::to('/proses/todo/remove') }}'
								class='waves-effect waves-light btn red' onclick='deleteAll(this.id)'>
							( <span id='todo-i-selected'>0</span> ) &nbsp;&nbsp;Delete Selected
						</button>
					</div>
					<br/>
					<p>
						<input type="checkbox" id="selectAll"/>
						<label for="selectAll">Pilih Semua</label>
					</p>
					<div id='konten'></div>
					<div id='todo-list' data-source='{{ URL::to('/list') }}'>
			
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id='loadingBox'>
		<img src='{{ URL::to('assets/dist/images/loading.gif') }}'>
	</div>
@endsection