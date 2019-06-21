@extends('errors::minimal')

@section('title', __('Services'))
@section('code', '503')
@section('message', __($exception->getMessage() ?: 'Service Unavailable'))
