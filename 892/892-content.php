    <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
    ?>
        <div class="type-892">
            <div id="wrapper" class="active">  
                <!-- Sidebar -->
                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul id="sidebar_menu">
                        <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
                    </ul>
                    <ul class="sidebar-nav" >
                        <li><a href="#">Cadastro<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                        <li><a href="#">link1<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                        <li><a href="#">link2<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                        <li><a href="#">Consulta<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                        <li><a href="#">Relatorio<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
                    </ul>
                </div>

                <!-- Page content -->
                <div id="page-content-wrapper">
                    <!-- Keep all page content within the page-content inset div! -->
                    <div class="page-content inset">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="head lead">Cadastro de Cliente</p>
                                <div class="container">
                                    <div class="row"> <!-- div da esquerda -->
                                        <!-- Text input CNPJ e Razao Social-->
                                        <div class="col-sm-8"> <!-- div da direita -->
                                            <form id="contact" method="post" class="form">
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-3 form-group">
                                                        <input class="form-control" id="inputCNPJ" name="CNPJ" placeholder="CNPJ" type="text" required autofocus />
                                                    </div>
                                                    <div class="col-xs-4 col-md-9 form-group">
                                                        <input class="form-control" id="inputrazaosocial" name="razaocosial" placeholder="Razão Social" type="text" />
                                                    </div>
                                                </div> <!-- fim row -->
                                                <!-- Text input endereco-->
                                                <div class="col-xs-4 col-md-12 form-group">
                                                    <div class="controls">
                                                        <input class="form-control" id="inputendereco" name="endereco" placeholder="Endereço"  type="text">
                                                    </div>
                                                </div><!--fim control-group-->
                                                <br> <!--pulando uma linha -->
                                                <!-- Text input cidade e estado-->
                                                <div class="row">
                                                    <div class="col-xs-6 col-md-9 form-group">
                                                        <input class="form-control" id="inputcidade" name="cidade" placeholder="Cidade" type="text" />
                                                    </div>
                                                    <div class="col-xs-4 col-md-3 form-group">
                                                        <select class="form-control" id="selectbasic" name="selectestado" >
                                                            <option>Selecione</option>
                                                            <option>AC</option>
                                                            <option>AL</option>
                                                            <option>AP</option>
                                                            <option>AM</option>
                                                            <option>BA</option>
                                                            <option>CE</option>
                                                            <option>DF</option>
                                                            <option>ES</option>
                                                            <option>GO</option>
                                                            <option>MA</option>
                                                            <option>MT</option>
                                                            <option>MS</option>
                                                            <option>MG</option>
                                                            <option>PA</option>
                                                            <option>PB</option>
                                                            <option>PR</option>
                                                            <option>PE</option>
                                                            <option>PI</option>
                                                            <option>RJ</option>
                                                            <option>RN</option>
                                                            <option>RS</option>
                                                            <option>RO</option>
                                                            <option>RR</option>
                                                            <option>SC</option>
                                                            <option>SP</option>
                                                            <option>SE</option>
                                                            <option>TO</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-xs-6 col-md-3 form-group">
                                                        <input class="form-control" id="inputtelefone" name="telefone" placeholder="Telefone" type="text" />
                                                    </div>
                                                    <div class="col-xs-4 col-md-3 form-group">
                                                        <input class="form-control" id="inputcontato" name="contato" placeholder="Contato" type="text" />
                                                    </div>
                                                    <div class="col-xs-4 col-md-6 form-group">
                                                        <input class="form-control" id="inputemail" name="email" placeholder="E-mail" type="text" />
                                                    </div>
                                                </div><!--fim Text input cidade e estado-->
                                                <div class="col-xs-4 col-md-12 form-group">
                                                    <div class="controls">
                                                        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                                                    </div>
                                                </div>
                                                <br />

                                                <div class="row">
                                                    <div class="col-xs-12 col-md-12 form-group">
                                                        <button class="btn btn-primary pull-right" type="submit">Salvar</button>
                                                        <button class="btn btn-primary pull-right" type="submit">Limpar</button>
                                                        <!--<button class="btn btn-primary pull-right" type="submit">Enviar</button>-->
                                                    </div>
                                                </div>
                                            </form>
                                        </div> <!-- fim div da direita -->
                                    </div> <!-- fim div da esquerda -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="foot lead">An Experiment using the sidebar (<a href="http://animeshmanglik.name">animeshmanglik.name</a>)</p>
            </div>
            <script>
                $("#menu-toggle").click(function (e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("active");
                });
            </script>
        </div>
