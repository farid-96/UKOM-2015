@extends("layout.layout")

@section("content")
    <br/>
            <header>
                <div class="clearfix">
                    <div class="place-left">
                        <div class="span2">
                            <img src="images/ico.png"/>
                        </div>
                    </div>
                </div>
            </header>
                <hr /><br />
                <div class="grid">
                    <div class="row">
                            <div class="span4 offset2">
                                <img src="images/loginimg.png"/>
                            </div>
                            <div class="span1"></div>
                            <div class="span5">
                                <div class="clearfix">
                                    <div class="place-left">
                                      <label>Silahkan Login</label>
                                    </div>
                                </div>
                                {{Form::open()}}
                                <div class="input-control text" data-role="input-control">
                                    <input type="text" placeholder="Username" name="username"/>
                                </div>
                                <div class="input-control password">
                                    <input type="password" placeholder="Kata sandi" name="esandi"/>
                                    <button class="btn-reveal" tabindex="-1"></button>
                                </div>
                                <div class="input-control submit" data-role="input-control">
                                    <a href="{{URL::to('beranda')}}"<button type="submit"  value="Login" class="button large info"/></a>
                                </div>
                                {{Form::close()}}<br />
                                <!--<label>{{link_to("forgot", "Lupa kata sandi anda ?")}}</label><br /><br /> -->
                                <label>Belum punya akun ? {{link_to("register", "Silahkan Daftar")}}</label>
                            </div>
                    </div>
                </div>
@stop
