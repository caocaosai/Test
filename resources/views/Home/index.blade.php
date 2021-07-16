@extends('layout.app')
@section('css_bottom')
<style>
    p{
        color: red;
    }
</style>
@endsection
@section('body')
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <center><h1 style="color: rgb(57, 46, 207)">Coco Smile</h1></center>
                    <center><h3 style="color: rgb(57, 46, 207)">Logistic Products</h1></center>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"></li>
                        </ol>       
                </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="py-12">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
                <label for="user">Insert Random String</label>
                <input id="number-input" type="text" name="user" class="form-control" placeholder="Insert Random String" required autocomplete="off">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="d-grid gap-2" style="padding-top: 5%">
                    <button id="run-button" type="submit" class="btn btn-success">Submit</button>
                </div> 
            </div>
        </div>
        </div>
        <div id="output" style="background-color: khaki" class="uk-card uk-card-secondary uk-card-body uk-text-large"></div>
    </div>
</div>
    @endsection
   