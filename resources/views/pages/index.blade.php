@extends('layouts.app')

@section('content')
      <h1 style="text-align: center"> Zapraszamy do zapoznania się z naszymi produktami </h1>
    <br>
    <div class="row">

      <div class="col-md-5 mx-auto bg-dark" style="text-align: center; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; padding:10px; margin-top: 20px">

                  <img width="100%" height="50px" src="slajdy.bmp" />
  
                  <div class="col-12" style="color:white">
                      Droższy bajer 
                  </div>
  
                  <div class="row">
                      <div class="col-6" style="color:white; font-size:24px">
                          120,00zł
                      </div>
                      <div class="col-6"><button type="button" class="btn btn-lg btn-block btn-danger">Kup Teraz!</button></div>
                  </div>
              </div>

              <div class="col-md-5 mx-auto bg-dark" style="text-align: center; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; padding:10px; margin-top: 20px">

                    <img width="100%" height="50px" src="slajdy.bmp" />
    
                    <div class="col-12" style="color:white">
                        Opis 
                    </div>
    
                    <div class="row">
                        <div class="col-6" style="color:white; font-size:24px">
                            99,99zł
                        </div>
                        <div class="col-6"><button type="button" class="btn btn-lg btn-block btn-danger">Kup Teraz!</button></div>
                    </div>
                </div>

                <div class="col-md-5 mx-auto bg-dark" style="text-align: center; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; padding:10px; margin-top: 20px">

                        <img width="100%" height="50px" src="slajdy.bmp" />
        
                        <div class="col-12" style="color:white">
                            Tańi kolczyk, jeden!
                        </div>
        
                        <div class="row">
                            <div class="col-6" style="color:white; font-size:24px">
                                35,00zł
                            </div>
                            <div class="col-6"><button type="button" class="btn btn-lg btn-block btn-danger">Kup Teraz!</button></div>
                        </div>
                    </div>

                    <div class="col-md-5 mx-auto bg-dark" style="text-align: center; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; padding:10px; margin-top: 20px">

                            <img width="100%" height="50px" src="slajdy.bmp" />
            
                            <div class="col-12" style="color:white">
                                Opis tego produktu
                            </div>
            
                            <div class="row">
                                <div class="col-6" style="color:white; font-size:24px">
                                    80,55zł
                                </div>
                                <div class="col-6"><button type="button" class="btn btn-lg btn-block btn-danger">Kup Teraz!</button></div>
                            </div>
                        </div>
    </div>

@endsection
