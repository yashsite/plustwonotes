@extends('_layouts.home')

@section('title')
    Register - Plus Two Notes
@stop

@section('content')
    <div class="mdl-typography--text-center auth-form auth-form__bg-container">
        <div class="auth-form__bg-overlay">
            <h3 class="text--light reveal reveal-top">Register</h3>

            <h4 class="text--light reveal reveal-bottom">Get goodies by registering in to our website!</h4>

            @include('_partials.bags.errorbag')

            <div class="auth-form__container">
                {!! Form::open(['url' => '/register','method' => 'POST']) !!}

                <!-- First Name Input -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label reveal reveal-right-staggered-250">
                    {!! Form::label('first_name','First Name',['class'=>'label--inverse mdl-textfield__label']) !!}
                    {!! Form::text('first_name',null,['class' => 'textfield--inverse mdl-textfield__input']) !!}
                </div>

                <br />

                <!-- Middle Name Input -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label reveal reveal-right-staggered-250">
                    {!! Form::label('middle_name','Middle Name',['class'=>'label--inverse mdl-textfield__label']) !!}
                    {!! Form::text('middle_name',null,['class' => 'textfield--inverse mdl-textfield__input']) !!}
                </div>

                <br />

                <!-- Last Name Input -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label reveal reveal-right-staggered-250">
                    {!! Form::label('last_name','Last Name',['class'=>'label--inverse mdl-textfield__label']) !!}
                    {!! Form::text('last_name',null,['class' => 'textfield--inverse mdl-textfield__input']) !!}
                </div>

                <br />

                <!-- Username Input -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label reveal reveal-right-staggered-250">
                    {!! Form::label('username','Username',['class'=>'label--inverse mdl-textfield__label']) !!}
                    {!! Form::text('username',null,['class' => 'textfield--inverse mdl-textfield__input']) !!}
                </div>

                <br />

                <!-- Email Input -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label reveal reveal-right-staggered-250">
                    {!! Form::label('email','Email',['class'=>'label--inverse mdl-textfield__label']) !!}
                    {!! Form::text('email',null,['class' => 'textfield--inverse mdl-textfield__input']) !!}
                </div>

                <br />

                <!-- Password Input -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label reveal reveal-right-staggered-250">
                    {!! Form::label('password','Password',['class'=>'label--inverse mdl-textfield__label']) !!}
                    {!! Form::password('password',['class' => 'textfield--inverse mdl-textfield__input']) !!}
                </div>

                <br />

                <!-- Re-enter password Input -->
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label reveal reveal-right-staggered-250">
                    {!! Form::label('password_confirmation','Re-enter password',['class'=>'label--inverse mdl-textfield__label']) !!}
                    {!! Form::password('password_confirmation',['class' => 'textfield--inverse mdl-textfield__input']) !!}
                </div>

                <br /><br />

                <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent mdl-js-ripple-effect reveal reveal-bottom-delay-250" value="Register" />

                {!! Form::close() !!}

                <br />

                {{--Or,--}}

                {{--<br />--}}

                {{--@include('_partials.auth.social',['text' => 'Register'])--}}

                {{--<br /><br />--}}

                <a href="{{ url('/login') }}" class="text--color-white reveal reveal-bottom-delay-500">Already Have an Account?</a>
            </div>
        </div>
    </div>
@stop