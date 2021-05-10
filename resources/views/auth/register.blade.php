@extends('layouts.base')

@section('body')
    <div class="auth-container">
        <div class="content">
            <a href="{{ route('home.index') }}"><h1><span class="has-text-primary">Pic</span>Share</h1></a>
            <div class="card auth-card">
                <div class="card-content">
                    <div class="content">
                        <h3 class="subtitle has-text-centered">Register</h3>
                        <form>
                            <div class="field">
                                <label for="field-username" class="label">Username:</label>
                                <input type="text" id="field-username" class="input is-small" />
                                @if (false)
                                    <small class="has-text-danger"></small>
                                @endif
                            </div>
                            <div class="field">
                                <label for="field-email" class="label">Email:</label>
                                <input type="text" id="field-email" class="input is-small" />
                                @if (false)
                                    <small class="has-text-danger"></small>
                                @endif
                            </div>
                            <div class="field">
                                <label for="field-password" class="label">Password:</label>
                                <input type="password" id="field-password" class="input is-small" />
                                @if (false)
                                    <small class="has-text-danger"></small>
                                @endif
                            </div>
                            <div class="field">
                                <label for="field-confirm-password" class="label">Confirm password:</label>
                                <input type="password" id="field-confirm-password" class="input is-small" />
                                @if (false)
                                    <small class="has-text-danger"></small>
                                @endif
                            </div>
                            <div class="level">
                                <div class="level-left"></div>
                                <div class="level-right">
                                    <a href="{{ route('login.index') }}" class="button is-small is-info is-outlined mr-1">Log In</a>
                                    <button type="submit" class="button is-primary is-small">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
