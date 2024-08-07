@extends('layout.master')
@section('content')


<div class="container bootdey-single-product">
    <div class="col-md-12">
        <section class="panel">
                         <div class="panel-body">
                <div class="col-12">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-5 col-12 ps-5 ">
                            <h1 class="single-heading"> {{$pro->productType->type_name}}</h1>
                            {{-- <p class="single-para">LED Downlight Iron A Series</p> --}}
                        </div>
                        <div class="col-md-5 col-12 text-center">
                       <img src="{{ !empty($pro->image_url) ? $pro->image_url : asset('assets/images/indoor1.jpeg') }}">

                            {{-- <img src="https://orionlightingpvtltd.com/storage/images/products/1719826375_iron-a.png" alt="" width="300"> --}}
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="qoute-wrapper">
                        <button class="get-quote">Get Quotation</button>
                    </div>
                    <h1 class="table-heading">Specification</h1>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">{{$pro->product_model}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="2" class="align-middle">LED Chips</td>
                                <td>EPISTAR SMD</td>
                            </tr>
                            <tr>
                                <td>BRIDGELUX</td>
                            </tr>
                            <tr>
                                <td>Wattage</td>
                                <td>{{$pro->wattage}}</td>
                            </tr>
                            <tr>
                                <td>Color Temprature</td>
                                <td>2700K, 4000K, 6400K, 8000K, 10000K</td>
                            </tr>
                            <tr>
                                <td>Initial Lumens</td>
                                <td>{{$pro->initial_lumen}}</td>
                            </tr>
                            <tr>
                                <td>Beam Angle</td>
                                <td>{{$pro->beam_angle}}</td>
                            </tr>
                            <tr>
                                <td>Stable_Lumen</td>
                                <td>{{$pro->stable_lumen}}</td>
                            </tr>
                        </tbody>
                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Fixture</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>RA</td>
                                <td>{{$pro->ra}}</td>
                            </tr>
                            <tr>
                                <td>Guarantee</td>
                                <td>{{$pro->guarantee}}</td>
                            </tr>
                            <tr>
                                <td>Fixture Color</td>
                                <td>White</td>
                            </tr>
                        </tbody>

                        <thead>
                            <tr>
                                <th scope="col" colspan="2">Drive</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Driver Mode</td>
                                <td>Constant Current Output Driver</td>
                            </tr>
                        </tbody>

                        <thead>
                            <tr>
                                <th scope="col" colspan="2">General Specification</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Voltage</td>
                                <td>85V/300V</td>
                            </tr>
                            <tr>
                                <td>Life Span</td>
                                <td>{{$pro->life_hours}}</td>
                            </tr>
                            <tr>
                                <td>Warranty</td>
                                <td>3 Years</td>
                            </tr>
                            <tr>
                                <td>Certification</td>
                                <td>ISO, CE, RoHS, NOM, SONCAP, CIQ, SASO</td>
                            </tr>
                            <tr>
                                <td>OEM &amp; ODM Service</td>
                                <td>Offered</td>
                            </tr>
                            <tr>
                                <td>Packing</td>
                                <td>Customized</td>
                            </tr>
                            <tr>
                                <td>Free Samples</td>
                                <td>Offered</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
                    </section>
    </div>
    <div class="container single-tab">


        <div class="product_download">
            <div class="download_name">SPECS SHEET</div>
            <div class="download_box">
                <div class="download_item">
                    <img src="https://asset.site.joinf.com/alite/images/pdf.png" alt="">
                    <div class="download_name">Qh Book</div>
                    <a class="download" href="https://orionlightingpvtltd.com/assets/pdf/orion-book.pdf" data-file="">Download PDF</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection