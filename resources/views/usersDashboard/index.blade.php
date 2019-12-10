@extends('layouts.app')

@section('content')
    <div class="container userdashboard">
        <div class="userdashboard-inner">
            <div class="row ">
                <div class="col">
                    <h1>Snel selectie</h1>
                </div>
                <div class="col d-flex justify-content-end">
                    <form action="{{ route('usersdashboard.destroy', ['usersdashboard' => $user]) }}"
                          method="post">
                        @csrf
                        @method('DELETE')
                        <button class="scnd-btn"><input class="" type="submit" value="Uitschrijven" onclick="return confirm ('Weet je zeker dat je je wilt uitschrijven voor het NK?')"></button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col selection-col">
                    <div class="selection-outer">
                        <div class="selection-inner d-flex flex-column justify-content-center">
                            <svg class="selection-img" width="90" height="100">
                                <path id="settings_icon"
                                      d="M73,56H48V81H73ZM68,1V11H28V1H18V11H13A9.955,9.955,0,0,0,3.05,21L3,91a10,10,0,0,0,10,10H83A10.029,10.029,0,0,0,93,91V21A10.029,10.029,0,0,0,83,11H78V1ZM83,91H13V36H83Z"
                                      transform="translate(-3 -1)"/>
                            </svg>
                            <h2 class="selection-title">Spelschema</h2>
                        </div>
                    </div>
                </div>
                <div class="col selection-col">
                    <div class="selection-outer">
                        <div class="selection-inner">
                            <svg class="selection-img" width="90" height="100">
                                <path id="settings_icon"
                                      d="M73,56H48V81H73ZM68,1V11H28V1H18V11H13A9.955,9.955,0,0,0,3.05,21L3,91a10,10,0,0,0,10,10H83A10.029,10.029,0,0,0,93,91V21A10.029,10.029,0,0,0,83,11H78V1ZM83,91H13V36H83Z"
                                      transform="translate(-3 -1)"/>
                            </svg>
                            <a href="/leaderboard"><h2 class="selection-title">Ranglijst</h2></a>
                        </div>
                    </div>
                </div>
                <div class="col selection-col">
                    <div class="selection-outer">
                        <div class="selection-inner">
                            <svg class="selection-img" width="90" height="100">
                                <path id="settings_icon"
                                      d="M73,56H48V81H73ZM68,1V11H28V1H18V11H13A9.955,9.955,0,0,0,3.05,21L3,91a10,10,0,0,0,10,10H83A10.029,10.029,0,0,0,93,91V21A10.029,10.029,0,0,0,83,11H78V1ZM83,91H13V36H83Z"
                                      transform="translate(-3 -1)"/>
                            </svg>
                            <h2 class="selection-title">Valideren</h2>
                        </div>
                    </div>
                </div>

                <div class="col selection-col">
                    <div class="selection-outer">
                        <div class="selection-inner">
                            <svg class="selection-img" width="90" height="100">
                                <path id="settings_icon"
                                      d="M73,56H48V81H73ZM68,1V11H28V1H18V11H13A9.955,9.955,0,0,0,3.05,21L3,91a10,10,0,0,0,10,10H83A10.029,10.029,0,0,0,93,91V21A10.029,10.029,0,0,0,83,11H78V1ZM83,91H13V36H83Z"
                                      transform="translate(-3 -1)"/>
                            </svg>

                            <a href="{{ route('usersdashboard.edit', ['usersdashboard' => $user]) }}"><h2
                                    class="selection-title">Profiel instellingen</h2></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
