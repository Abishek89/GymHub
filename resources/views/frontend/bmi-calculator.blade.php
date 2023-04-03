@extends('frontend.layout.main')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="/landbootstrap/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb-text">
                        <h2>BMI calculator</h2>
                        <div class="bt-option">
                            <a href="./index.html">Home</a>
                            <a href="#">Pages</a>
                            <span>BMI calculator</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- BMI Calculator Section Begin -->
    <section class="bmi-calculator-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title chart-title">
                        <span>check your body</span>
                        <h2>BMI CALCULATOR CHART</h2>
                    </div>
                    <div class="chart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Bmi</th>
                                    <th>WEIGHT STATUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="point">Below 18.5</td>
                                    <td>Underweight</td>
                                </tr>
                                <tr>
                                    <td class="point">18.5 - 24.9</td>
                                    <td>Healthy</td>
                                </tr>
                                <tr>
                                    <td class="point">25.0 - 29.9</td>
                                    <td>Overweight</td>
                                </tr>
                                <tr>
                                    <td class="point">30.0 - and Above</td>
                                    <td>Obese</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title chart-calculate-title">
                        <span>check your body</span>
                        <h2>CALCULATE YOUR BMI</h2>
                    </div>
                    <div class="chart-calculate-form">
                        <form method="post" action="{{ route('bmi.calculate') }}">
                            @csrf
                        <p>@if (isset($bmi))
                            <p>Your BMI is: {{ $bmi }}</p>
                        @endif</p>
                            <form action="#">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Height / cm" value="{{ old('height') }}" name="height">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Weight / kg" value="{{ old('weight') }}" name="weight">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Age" value="{{ old('age') }}" name="age">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" placeholder="Sex" name="sex">
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit">Calculate</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BMI Calculator Section End -->
    @endsection
 