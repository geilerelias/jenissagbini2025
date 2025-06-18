@extends('errors::minimal')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('La solicitud no se pudo procesar. Verifique los datos enviados e intente nuevamente.
'))

