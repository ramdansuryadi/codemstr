
 <ul class="nav navbar-nav navbar-right">
            <li><a href="{{URL('/search')}}" class="page-scroll">{{trans('menu.search')}}</a></li>
            <li><a href="#tf-contact" class="page-scroll">{{trans('menu.contact')}}</a></li>
            <li class="dropdown" id="menuLogin">
              <a class="login-trigger dropdown-toggle" href="#" data-toggle="dropdown" id="navLogin"><img class="usr" src="{{asset('img/icon/user.svg')}}" alt="" style="margin-right:5px;"/>{{trans('menu.login')}}</a>
              <div id="dropdown" class="login-content dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                <div class="formholder">
                     <form class="form" id="formLogin">
                       <fieldset>
                         <label name="email">{{trans('menu.email')}}</label>
                         <input placeholder="youremail@gmail.com" type="email"/>
                         <label name="password">{{trans('menu.password')}}</label>
                         <input type="password" />
                         <input type="submit" value="{{trans('menu.login')}}" />
                         <div class="remember">
                           <input type="checkbox" id="login" />
                           <label for="login">{{trans('menu.remember')}}</label>
                         </div>
                       </fieldset>
                     </form>
                </div>
              </div>
            </li>
          </ul>
