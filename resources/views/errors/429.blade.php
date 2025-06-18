@extends('errors::minimal')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __('Ha enviado demasiadas solicitudes en poco tiempo. Espere un momento.'))
