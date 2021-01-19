@extends('layouts.layout')

@section('registrarvisitas')
<div id="content">

    <div class="aling=center" style="margin-top:100px ;margin-left: 400px; margin-right: 200px">
        <div class="row">
            <div class="col-lg-12" align="center">
                <h1> Sistema de Gestión de la Información DIRIN - PNP</h1>
            </div>
        </div>
        <hr>

        <span id="resultado"></span>
        <form class="form-horizontal" method="get" action="reporte_visitas.php" id="frm" name="frm" target="_blank"
            data-select2-id="frm">
            <div align="center">
                <h2> BUSQUEDA </h2>
            </div>

            <div class="form-group" data-select2-id="4">
                <label class="control-label col-lg-4">DESTINO</label>
                <div id="unidad" class="col-lg-4" align="center" data-select2-id="unidad">
                    <select id="codunidad" name="unidad" class="input-xxlarge select2-hidden-accessible"
                        data-select2-id="codunidad" tabindex="-1" aria-hidden="true">
                        <option value="999" data-select2-id="2">SELECCIONAR TODOS</option>
                        <option value="1" data-select2-id="5"> DIRECCION </option>
                        <option value="432" data-select2-id="6"> DIVTAS-DEPSIS-SECCION MARTE </option>
                        <option value="431" data-select2-id="7"> DIVTAS-DEPTRASIT2 SECCION DE ASUNTOS DE CRIMEN
                            ORGANIZADO </option>
                        <option value="451" data-select2-id="8"> DIVPRINT-DEPPIAS-SECCION LABORAL </option>
                        <option value="425" data-select2-id="9"> DIVTAS-DEPTRASIT1-SECCION DE ASUNTOS LABORALES
                        </option>
                        <option value="2" data-select2-id="10"> SECRETARIA </option>
                        <option value="3" data-select2-id="11"> SEC-UNIDAD DE PLANEAMIENTO Y EDUCACION </option>
                        <option value="340" data-select2-id="12"> ESCUELA DE INTELIGENCIA POLICIAL </option>
                        <option value="11" data-select2-id="13"> AYUDANTIA </option>
                        <option value="419" data-select2-id="14"> DEPARTAMENTO DE COMUNICACIONES </option>
                        <option value="337" data-select2-id="15"> DIVISION DE TRATAMIENTO DE LA INFORMACION </option>
                        <option value="4" data-select2-id="16"> DEPARTAMENTO DE INDICACIONES </option>
                        <option value="421" data-select2-id="17"> DEPARTAMENTO DE TRATAMIENTO SITUACIONAL 1 </option>
                        <option value="436" data-select2-id="18"> DIVTAS-DEPTRASIT1 SECCION DE ASUNTOS SOCIO CAMPESINADO
                        </option>
                        <option value="426" data-select2-id="19"> DIVTAS-DEPTRASIT1 SECCION DE ASUNTOS DE POBLACIONALES
                        </option>
                        <option value="424" data-select2-id="20"> DIVTAS-DEPTRASIT1 SECCION DE ASUNTOS SOCIO MINERIA
                        </option>
                        <option value="427" data-select2-id="21"> DIVTAS-DEPTRASIT1 SECCION DE ASUNTOS EDUCACIONALES
                        </option>
                        <option value="423" data-select2-id="22"> DIVTAS-DEPTRASIT1 SECCION DE ASUNTOS GUBERNAMENTALES
                        </option>
                        <option value="422" data-select2-id="23"> DEPARTAMENTO DE TRATAMIENTO SITUACIONAL 2 </option>
                        <option value="430" data-select2-id="24"> DIVTAS-DEPTRASIT2 SECCION DE ASUNTOS DE DELINCUENCIA
                            COMUN </option>
                        <option value="433" data-select2-id="25"> DIVTAS-DEPTRASIT2 SECCION DE ASUNTOS ESPECIALES
                        </option>
                        <option value="434" data-select2-id="26"> DIVTAS-DEPTRASIT2 SECCION DE ASUNTOS DE LAVADO DE
                            ACTIVOS </option>
                        <option value="435" data-select2-id="27"> DIVTAS-DEPTRASIT2 SECCION DE ASUNTOS DE PENITENCIARIOS
                        </option>
                        <option value="428" data-select2-id="28"> DIVTAS-DEPTRASIT2 SECCION DE ASUNTOS DE TERRORISMO
                        </option>
                        <option value="429" data-select2-id="29"> DIVTAS-DEPTRASIT2 SECCION DE TID </option>
                        <option value="420" data-select2-id="30"> DEPARTAMENTO DE SISTEMATIZACION DE LA INFORMACION
                        </option>
                        <option value="253" data-select2-id="31"> SECCION MARTE </option>
                        <option value="498" data-select2-id="32"> DIVCON - DEPARTAMENTO DE SEGURIDAD NACIONAL </option>
                        <option value="596" data-select2-id="33"> DIVCON - AGENTE COND. FUNC. INDEBIDA - DELITOS Y
                            FALTAS </option>
                        <option value="496" data-select2-id="34"> DIVCON - DEPARTAMENTO DE ASUNTOS INTERNOS </option>
                        <option value="581" data-select2-id="35"> CEIND DIVISION DE CONTRAINTELIGENCIA </option>
                        <option value="614" data-select2-id="36"> DIVCON- AGENTE EQUIPO ALPHA CONTRA D/C/A/P - COHECHO
                        </option>
                        <option value="582" data-select2-id="37"> AREA DE TRATAMIENTO - DIVCON - DEPARTAMENTO DE ASUNTOS
                            INTERNOS </option>
                        <option value="497" data-select2-id="38"> DIVCON - DEPARTAMENTO DE GESTION DE RIESGOS </option>
                        <option value="592" data-select2-id="39"> DIVCON - AGENTE DE ASUNTOS INTERNOS </option>
                        <option value="593" data-select2-id="40"> DIVCON - DEPGERI - SECCION DE MEDIDAS
                            CONTRAINTELIGENCIA </option>
                        <option value="594" data-select2-id="41"> DIVCON - EQUIPO COND. FUNC. INDEBIDA - DELITOS Y
                            FALTAS </option>
                        <option value="595" data-select2-id="42"> DIVCON - ANALISTA COND. FUNC. INDEBIDA - DELITOS Y
                            FALTAS </option>
                        <option value="589" data-select2-id="43"> DIVCON - SECCION DE ASUNTOS INTERNOS </option>
                        <option value="597" data-select2-id="44"> DIVCON - DEPSENAC - SECCION DE ANALISIS </option>
                        <option value="585" data-select2-id="45"> AREA DE TRATAMIENTO - DIVCON -DEPARTAMENTO DE
                            CONFIABILIDAD Y EVALUACION DE LA CREDIBILIDAD </option>
                        <option value="591" data-select2-id="46"> DIVCON - ANALISTA DE ASUNTOS INTERNOS </option>
                        <option value="584" data-select2-id="47"> AREA DE TRATAMIENTO - DIVCON - DEPARTAMENTO DE
                            SEGURIDAD NACIONAL </option>
                        <option value="583" data-select2-id="48"> AREA DE TRATAMIENTO - DIVCON - DEPARTAMENTO DE GESTION
                            DE RIESGOS </option>
                        <option value="590" data-select2-id="49"> DIVCON - EQUIPO DE ASUNTOS INTERNOS </option>
                        <option value="598" data-select2-id="50"> DIVCON - &nbsp;EQUIPO DE FRENTE INTERNO </option>
                        <option value="622" data-select2-id="51"> DIVCON - DEPGERI - SECCION DE ANALISIS Y ESTADISTICA
                        </option>
                        <option value="624" data-select2-id="52"> DIVCON - ANALISTA DE ANALISIS Y ESTADISTICA </option>
                        <option value="625" data-select2-id="53"> DIVCON - AGENTE DE ANALISIS Y ESTADISTICA </option>
                        <option value="626" data-select2-id="54"> DIVCON - &nbsp;EQUIPO DE FRENTE EXTERNO </option>
                        <option value="627" data-select2-id="55"> DIVCON - ANALISTA DE FRENTE EXTERNO </option>
                        <option value="628" data-select2-id="56"> DIVCON - &nbsp;AGENTE DE FRENTE EXTERNO </option>
                        <option value="629" data-select2-id="57"> DIVCON - DEPSENAC- SECCION DE GRUPO ESPECIAL </option>
                        <option value="630" data-select2-id="58"> DIVCON - &nbsp;EQUIPO DE GRUPO ESPECIAL </option>
                        <option value="631" data-select2-id="59"> DIVCON - ANALISTA DE GRUPO ESPECIAL </option>
                        <option value="632" data-select2-id="60"> DIVCON - &nbsp;AGENTE DE GRUPO ESPECIAL </option>
                        <option value="633" data-select2-id="61"> DIVCON - DEPSENAC- SECCION AEROPUERTO INTERNACIONAL
                            JORGE CHAVEZ </option>
                        <option value="634" data-select2-id="62"> DIVCON - &nbsp;EQUIPO DE AEROPUERTO INTERNACIONAL
                            JORGE CHAVEZ </option>
                        <option value="635" data-select2-id="63"> DIVCON - ANALISTA DE AEROPUERTO INTERNACIONAL JORGE
                            CHAVEZ </option>
                        <option value="621" data-select2-id="64"> DIVCON - &nbsp;AGENTE DE SEGURIDAD CONTRA CONDUCTA
                            FUNC. INDEBIDA </option>
                        <option value="620" data-select2-id="65"> DIVCON - ANALISTA DE SEGURIDAD CONTRA CONDUCTA FUNC.
                            INDEBIDA </option>
                        <option value="599" data-select2-id="66"> DIVCON - ANALISTA DE FRENTE INTERNO </option>
                        <option value="600" data-select2-id="67"> DIVCON - &nbsp;AGENTE DE FRENTE INTERNO </option>
                        <option value="601" data-select2-id="68"> DIVCON - SECCION DE CONFIABILIDAD Y EVALUACION DE LA
                            CREDIBILIDAD </option>
                        <option value="602" data-select2-id="69"> DIVCON - EQUIPO DE CONFIABILIDAD Y EVALUACION DE LA
                            CREDIBILIDAD </option>
                        <option value="603" data-select2-id="70"> DIVCON - ANALISTA DE CONFIABILIDAD Y EVALUACION DE LA
                            CREDIBILIDAD </option>
                        <option value="604" data-select2-id="71"> DIVCON - AGENTE DE CONFIABILIDAD Y EVALUACION DE LA
                            CREDIBILIDAD </option>
                        <option value="612" data-select2-id="72"> DIVCON- EQUIPO ALPHA CONTRA D/C/A/P - COHECHO
                        </option>
                        <option value="613" data-select2-id="73"> DIVCON- ANALISTA EQUIPO ALPHA CONTRA D/C/A/P - COHECHO
                        </option>
                        <option value="615" data-select2-id="74"> DIVCON- EQUIPO BETHA RQ </option>
                        <option value="616" data-select2-id="75"> DIVCON- ANALISTA EQUIPO BETHA RQ </option>
                        <option value="617" data-select2-id="76"> DIVCON- AGENTE EQUIPO BETHA RQ </option>
                        <option value="618" data-select2-id="77"> DIVCON - DEPGERI - SECCION DE SEGURIDAD CONTRA
                            CONDUCTA FUNC. INDEBIDA </option>
                        <option value="619" data-select2-id="78"> DIVCON - EQUIPO DE SEGURIDAD CONTRA CONDUCTA FUNC.
                            INDEBIDA </option>
                        <option value="636" data-select2-id="79"> DIVCON - &nbsp;AGENTE DE AEROPUERTO INTERNACIONAL
                            JORGE CHAVEZ </option>
                        <option value="417" data-select2-id="80"> DIVISION DE PRODUCCION DE INTELIGENCIA </option>
                        <option value="499" data-select2-id="81"> DIVCON - DEPARTAMENTO DE CONFIABILIDAD Y EVALUACION DE
                            LA CREDIBILIDAD </option>
                        <option value="623" data-select2-id="82"> DIVCON - EQUIPO DE ANALISIS Y ESTADISTICA </option>
                        <option value="9" data-select2-id="83"> DIVISION DE CONTRAINTELIGENCIA </option>
                        <option value="5" data-select2-id="84"> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS
                            CRIMINALES </option>
                        <option value="443" data-select2-id="85"> DIVPRINT-DEPPIAC-SECCION DE CRIMEN ORGANIZADO
                        </option>
                        <option value="444" data-select2-id="86"> DIVPRINT-DEPPIAC-SECCION DE TID </option>
                        <option value="445" data-select2-id="87"> DIVPRINT-DEPPIAC-SECCION DE TERRORISMO </option>
                        <option value="6" data-select2-id="88"> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS
                            SOCIALES </option>
                        <option value="452" data-select2-id="89"> DIVPRINT-DEPPIAS-SECCION POBLACIONAL </option>
                        <option value="453" data-select2-id="90"> DIVPRINT-DEPPIAS-SECCION EDUCACIONAL </option>
                        <option value="454" data-select2-id="91"> DIVPRINT-DEPPIAS-SECCION MINERIA </option>
                        <option value="455" data-select2-id="92"> DIVPRINT-DEPPIAS-SECCION CAMPESINADO </option>
                        <option value="7" data-select2-id="93"> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS DE
                            SEGURIDAD CIUDADANA </option>
                        <option value="439" data-select2-id="94"> DEPASEC-SECCION DE DELINCUENCIA COMUN </option>
                        <option value="440" data-select2-id="95"> DEPASEC-SECCION MICRO COMERCIALIZACION DE DROGA
                        </option>
                        <option value="441" data-select2-id="96"> DEPASEC-SECCION PANDILLAJE </option>
                        <option value="442" data-select2-id="97"> DEPASEC-SECCION BARRIO Y VECINDARIO SEGURO </option>
                        <option value="335" data-select2-id="98"> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS DE
                            SEGURIDAD GUBERNAMENTAL </option>
                        <option value="447" data-select2-id="99"> DIVPRINT-DEPPISG-SECCION DE ESTADISTICA Y
                            PRODUCTIVIDAD </option>
                        <option value="448" data-select2-id="100"> DIVPRINT-DEPPISG-SECCION DE ACTIVOS CRITICOS
                        </option>
                        <option value="449" data-select2-id="101"> DIVPRINT-DEPPISG-ORGANIZACIONES SOCIO POLITICOS
                        </option>
                        <option value="450" data-select2-id="102"> DIVPRINT-DEPPISG-SECCION DE SEGURIDAD GUBERNAMENTAL
                            NACIONAL </option>
                        <option value="446" data-select2-id="103"> DIVPRINT-DEPPISG-SECCION DE SEGURIDAD GUBERNAMENTAL
                            INTERNACIONAL </option>
                        <option value="456" data-select2-id="104"> DIVPRINT - DEPARTAMENTO DE INTELIGENCIA ESTRATEGICA Y
                            PROSPECTIVA </option>
                        <option value="336" data-select2-id="105"> DIVPRINT-DEPIEP - SECCION DE ANTICIPACION ESTRATEGICA
                        </option>
                        <option value="457" data-select2-id="106"> DIVPRINT-DEPIEP - SECCION DE ANALISIS ESTRATEGICO
                            NACIONAL </option>
                        <option value="458" data-select2-id="107"> DIVPRINT-DEPIEP - SECCION DE ANALISIS PROSPECTIVO
                        </option>
                        <option value="259" data-select2-id="108"> DIVISION DE BUSQUEDA </option>
                        <option value="257" data-select2-id="109"> DIVBUS-DEPARTAMENTO DE ASUNTOS CRIMINALES 1 </option>
                        <option value="261" data-select2-id="110"> DIVBUS-DEPASCRI-SECCION DE ACTIVIDADES TACTICAS
                        </option>
                        <option value="344" data-select2-id="111"> DIVBUS-DEPASCRI 1-SECCION 1 </option>
                        <option value="1149" data-select2-id="112"> DIVBUS-OFICINA DE ANALISIS TACTICO OPERATIVO
                        </option>
                        <option value="343" data-select2-id="113"> DIVBUS-DEPASCRI 1-SECCION 2 </option>
                        <option value="346" data-select2-id="114"> DIVBUS-DEPASCRI 1 - SECCION 3 </option>
                        <option value="438" data-select2-id="115"> DIVBUS-DEPARTAMENTO DE ASUNTOS CRIMINALES 2 </option>
                        <option value="339" data-select2-id="116"> DIVBUS-DEPASCRI 2-BASE INT. PTE PIEDRA </option>
                        <option value="349" data-select2-id="117"> DIVBUS-DEPARTAMENTO DE ASUNTOS CRIMINALES 3 </option>
                        <option value="215" data-select2-id="118"> DIVBUS - DEPASCRI 3- SECCION DE BUSQUEDA ESPECIAL 2
                        </option>
                        <option value="275" data-select2-id="119"> DIVBUS - DEPARTAMENTO DE ASUNTOS SOCIALES </option>
                        <option value="260" data-select2-id="120"> DIVBUS-DPTO DE BASES TERRITORIALES </option>
                        <option value="262" data-select2-id="121"> DIVBUS-DEPASC-SECINOPE </option>
                        <option value="263" data-select2-id="122"> DIVBUS-DEPASCRI-SECCION 2 </option>
                        <option value="418" data-select2-id="123"> DIVISION DE SEGURIDAD DIGITAL </option>
                        <option value="14" data-select2-id="124"> DIVSEDIG-DEPARTAMENTO DE GESTION DE LA INFORMACION
                        </option>
                        <option value="643" data-select2-id="125"> DIVSEDIG - DEPARTAMENTO DE GESTION DE LA INFORMACION
                            - GESTION DE BASE DE DATOS </option>
                        <option value="647" data-select2-id="126"> DIVSEDIG - DEPARTAMENTO DE INTEROPERABILIDAD Y
                            SOPORTE TECNICO - INTELIGENCIA GEO ESPACIAL </option>
                        <option value="648" data-select2-id="127"> DIVSEDIG -DEPARTAMENTO DE INTEROPERABILIDAD Y SOPORTE
                            TECNICO - INTELIGENCIA DE NEGOCIOS </option>
                        <option value="649" data-select2-id="128"> DIVSEDIG - DEPARTAMENTO DE GESTION DE LA INFORMACION
                            - REPORTES ESPECIALES </option>
                        <option value="10" data-select2-id="129"> DIVSEDIG-DEPARTAMENTO DE TECNOLOGIA DE LA INFORMACION
                            Y COMUNICACIONES </option>
                        <option value="465" data-select2-id="130"> DIVSEDIG - DEPARTAMENTO DE INTEROPERABILIDAD Y
                            SOPORTE TECNICO </option>
                        <option value="467" data-select2-id="131"> DIRIN - SECRETARIA - OFICINA DE ADMINISTRACION - AREA
                            DE LOGISTICA - COMEDOR </option>
                        <option value="347" data-select2-id="132"> DIVSEDIG- DEPARTAMENTO DE CIBERINTELIGENCIA </option>
                        <option value="468" data-select2-id="133"> DIRIN - SECRETARIA - OFICINA DE ADMINISTRACION - AREA
                            DE LOGISTICA </option>
                        <option value="469" data-select2-id="134"> DIRIN - SECRETARIA - OFICINA DE ADMINISTRACION - AREA
                            DE ECONOMIA </option>
                        <option value="470" data-select2-id="135"> DIRIN - SECRETARIA - UNIDAD DE COMUNICACION E IMAGEN
                        </option>
                        <option value="13" data-select2-id="136"> OFICINA DE ADMINISTRACIÓN </option>
                        <option value="459" data-select2-id="137"> DIVISION DE COORDINACION Y EVALUACION SIPOL </option>
                        <option value="460" data-select2-id="138"> DIRIN-DIVISION DE COORDINACION Y EVALUACION
                            SIPOL-DEPARTAMENTO DE COORDINACION ORGANIZACIONAL </option>
                        <option value="461" data-select2-id="139"> DIVISION DE COORDINACION Y EVALUACION
                            SIPOL-DEPARTAMENTO DE COORDINACION OPERACIONAL </option>
                        <option value="462" data-select2-id="140"> DEPARTAMENTO DE TRAZABILIDAD, MEDICION E IMPACTO
                        </option>
                        <option value="586" data-select2-id="141"> UNIDAD DE ASESORIA JURIDICA - DIRIN </option>
                        <option value="12" data-select2-id="142"> UNIDAD DE SEGURIDAD - DIRIN </option>
                        <option value="8" data-select2-id="143"> DIVISION DE ASUNTOS ESPECIALES </option>
                        <option value="500" data-select2-id="144"> DIVBUS-DEPARTAMENTO ESPECIAL DE APOYO TECNOLOGICO
                        </option>
                        <option value="348" data-select2-id="145"> DIVPRINT-DEPARTAMENTO DE INTELIGENCIA EN ASUNTOS DE
                            ORDEN INTERNO </option>
                        <option value="255" data-select2-id="146"> DIVBUS - DEPARTAMENTO DE BASES TERRITORIALES - NO
                            VALE </option>
                        <option value="338" data-select2-id="147"> DIVPOL 01 </option>
                        <option value="277" data-select2-id="148"> DIVBUS- DEPARTAMENTO DE MANEJO DE FUENTES HUMANAS
                        </option>
                    </select><span class="select2 select2-container select2-container--default select2-container--below"
                        dir="ltr" data-select2-id="1" style="width: 692px;"><span class="selection"><span
                                class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true"
                                aria-expanded="false" tabindex="0" aria-labelledby="select2-codunidad-container"><span
                                    class="select2-selection__rendered" id="select2-codunidad-container" role="textbox"
                                    aria-readonly="true" title="SELECCIONAR TODOS">SELECCIONAR TODOS</span><span
                                    class="select2-selection__arrow" role="presentation"><b
                                        role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                            aria-hidden="true"></span></span>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-4" for="reservation">FECHA</label>

                <div class="col-lg-4">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="icon-calendar"></i></span>
                        <input type="text" name="reservation" id="reservation" class="form-control">
                    </div>
                </div>
            </div>
            <!--  Fin   -->

            <div class="form-group" align="center">
                <button type="submit" class="btn btn-primary btn-lg">Buscar</button>
            </div>
        </form>



        <!-- InstanceEndEditable -->

    </div>

</div>
@endsection