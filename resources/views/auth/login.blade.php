@extends('layouts.base')

@section('body')
    <div class="auth-container">
        <div class="content">
            <a href="{{ route('home.index') }}"><h1><span class="has-text-primary">Pic</span>Share</h1></a>
            <div class="card auth-card">
                <div class="card-content">
                    <div class="content">
                        <h3 class="subtitle has-text-centered">Login</h3>
                        <form>
                            <div class="field">
                                <label for="field-username" class="label">Username:</label>
                                <input type="text" id="field-username" class="input is-small" />
                            </div>
                            <div class="field">
                                <label for="field-password" class="label">Password:</label>
                                <input type="password" id="field-password" class="input is-small" />
                            </div>
                            <div class="level">
                                <span class="has-text-danger">Your credentials are incorrect.</span>
                            </div>
                            <div class="level">
                                <a href="#" class="level-left">Forgot password?</a>
                                <div class="level-right">
                                    <a href="{{ route('register.index') }}" class="button is-small is-info is-outlined mr-1">Sign up</a>
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
