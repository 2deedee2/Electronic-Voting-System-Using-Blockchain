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
                                <input class="submitBtn" type="submit" name="1" value="Vote">
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ $icon }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Candidate 2</h5>
                                <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio, aperiam, fuga, corrupti ab eveniet laborum nostrum quam accusamus saepe numquam optio nisi? Impedit illo ad eum molestiae corporis harum esse.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="cardBtn">
                                <input class="submitBtn" type="submit" name="2" value="Vote">
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ $icon }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Candidate 3</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum corporis, distinctio expedita dolorem possimus nesciunt qui asperiores enim maxime fugiat fuga nulla ipsa quae laborum explicabo vero molestias quam. Assumenda.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="cardBtn">
                                <input class="submitBtn" type="submit" name="3" value="Vote">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cards-col2">
                    <div class="card-group">
                        <div class="card">
                            <img src="{{ $icon }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Candidate 4</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, consectetur quod labore id ipsum exercitationem, officiis explicabo et ea animi velit provident dolore unde necessitatibus cupiditate! Eum sit culpa eos.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="cardBtn">
                                <input class="submitBtn" type="submit" name="4" value="Vote">
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ $icon }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Candidate 5</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, consectetur quod labore id ipsum exercitationem, officiis explicabo et ea animi velit provident dolore unde necessitatibus cupiditate! Eum sit culpa eos.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="cardBtn">
                                <input class="submitBtn" type="submit" name="5" value="Vote">
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ $icon }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Candidate 6</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, consectetur quod labore id ipsum exercitationem, officiis explicabo et ea animi velit provident dolore unde necessitatibus cupiditate! Eum sit culpa eos.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            <div class="cardBtn">
                                <input class="submitBtn" type="submit" name="6" value="Vote">
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>



    </div>


@stop
