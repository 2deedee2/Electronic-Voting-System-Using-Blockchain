@extends('layouts.default')
@section('title','Election')
@section('content')

<?php $icon = "https://icons-for-free.com/iconfiles/png/512/business+face+people+icon-1320086457520622872.png" ?>
<div class="container">
        <div class="electionCard">
            <form action="{{ route('election') }}" method="POST">
                {{ csrf_field() }}
                <div class="cards-col1">
                    <div class="card-group">
                        <div class="card">
                            <img src="{{ $icon }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Candidate 1</h5>
                                <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere, ullam! Placeat ipsa illo hic atque, quod libero. Saepe quisquam provident accusamus eiu.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="cardBtn">
                                <input type="submit" name="1" value="Vote">
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ $icon }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Candidate 2</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to
                                    additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="cardBtn">
                                    <a href="javascript:can2();"><button type="button" name="can2" value="can2" class="btn btn-info">vote</button></a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ $icon }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Candidate 3</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This card has even longer content than the first to show that equal height
                                    action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="cardBtn">
                                    <a href="javascript:can3();"><button type="button" name="can3" value="can3" class="btn btn-info">vote</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cards-col2">
                    <div class="card-group">
                        <div class="card">
                            <img src="{{ $icon }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ $icon }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This card has supporting text below as a natural lead-in to
                                    additional content.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ $icon }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional
                                    content. This card has even longer content than the first to show that equal height
                                    action.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>



    </div>


@stop
