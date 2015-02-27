<header>
	<nav class="navigation-bar default fixed-top">
		<nav class="navigation-bar-content">
			<a href="/inputdata" class="element"><span class="icon-book"></span> Yuk Ngampus</a>
             <span class="element-divider"></span>
               
			 <a class="pull-menu element place-right" href="#"></a>
                    <ul class="element-menu place-right">
						<li><a href="/login"><span class="icon-exit"></span> Logout</a></li>
						</li>
					</ul>
                    <ul class="element-menu place-right">
						<li><a href="/register"><span class="icon-user"></span> Register Operator</a></li>
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
                                    var content = '<form class="user-input">' +
                                            '<label>Login</label>' +
                                            '<div class="input-control text"><input type="text" name="login"><button class="btn-clear"></button></div>' +
                                            '<label>Password</label>'+
                                            '<div class="input-control password"><input type="password" name="password"><button class="btn-reveal"></button></div>' +
                                            '<div class="form-actions">' +
                                            '<button class="button primary">Login</button>&nbsp;'+
                                            '<button class="button" type="button" onclick="$.Dialog.close()">Batal</button> '+
                                            '<button class="button"><a href="{{ URL::to('inputdata') }}">Cari Kampus</a></button> '+
                                            '</div>'+
                                            '</form>';

                                    $.Dialog.title("Login admin");
                                    $.Dialog.content(content);
                                }
                            });
                        });
		</script>
