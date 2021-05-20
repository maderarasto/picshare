@extends('layouts.base')

@section('body')
    <div class="auth-container">
        <div class="content">
            <a href="{{ route('home.index') }}"><h1 class="mb-0"><span class="has-text-primary">Pic</span>Share</h1></a>
            <h4 class="subtitle has-text-centered admin-subtitle">Administration</h4>
            <div class="card auth-card">
                <div class="card-content">
                    <div class="content">
                        <h3 class="subtitle has-text-centered">Login</h3>
                        <form method="post" action="{{ route('login.submit') }}">
                            {{ csrf_field() }}
                            <div class="field">
                                <label for="field-username" class="label">Username:</label>
                                <input type="text" id="field-username" name="username" class="input is-small" value="{{ old('username') }}" />
                                @error('username')
                                    <small class="has-text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="field-password" class="label">Password:</label>
                                <input type="password" id="field-password" name="password" class="input is-small" />
                                @error('password')
                                <small class="has-text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="level">
                                <a href="#" class="level-left">Forgot password?</a>
                                <div class="level-right">
                                    <button type="submit" class="button is-primary is-small">Log In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
