@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __('El servicio no está disponible actualmente. Inténtelo de nuevo más tarde.
'))
