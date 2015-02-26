<header>
	<nav class="navigation-bar default fixed-top">
		<nav class="navigation-bar-content">
			<a href="/" class="element"><span class="icon-book"></span> Yuk Ngampus</a>
			<span class="element-divider"></span>
			<a class="pull-menu element place-right" href="#"></a>
			<ul class="element-menu place-right">
				<li><a href="http://localhost/yukNgampus/">Beranda</a></li>
				<li><a href="{{ URL::to('kampusdata') }}">Data Kampus</a></li>
				<li><a href="{{ URL::to('kampuscari') }}">Cari Jurusan</a></li>
				<li><a class="dropdown-toggle" href="#"><span class="icon-cog"></span> Pengaturan</a>
					<ul class="dropdown-menu place-right " data-role="dropdown">
						<li ><a href="/login" >Login Admin</a></li>
						<li><a href="#">Tentang</a></li>
					</ul>
				</li>
			</ul>         			
		</nav>
	</nav>
</header>
<script>
$("#dialoglogin").on('click', function(){
                            $.Dialog({
                                overlay: true,
                                shadow: true,
                                flat: true,
                                draggable: true,
                                icon: '<img src="images/icon.png">',
                                title: 'Flat window',
                                content: '',
                                padding: 10,
                                onShow: function(_dialog){
                                    var content ='@if(Session::has('pesan_error'))'+
													'<div class="alert alert-danger">{{ Session::get('pesan_error') }}</div>'+
													'@endif'+
													'{{Form::open(array('action' => 'UserController@authenticate')) }}'+
													'{{Form::label('email', 'Email') }}'+
													'{{Form::text('email', '', array('class' => 'form-control'))}}'+
													'{{Form::label('password', 'Password') }}'+
													'{{Form::password('password', array('class' => 'form-control'))}}'+
													'{{Form::submit('Login', array('class' => 'btn btn-primary')) }}'+
													'{{Form::close() }}';
                                    $.Dialog.title("Login admin");
                                    $.Dialog.content(content);
                                }
                            });
                        });
		</script>
		
