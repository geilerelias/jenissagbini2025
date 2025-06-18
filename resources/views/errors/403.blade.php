@extends('errors::minimal')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Usted no tiene los permisos necesarios para ver esta página.
'))
