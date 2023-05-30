<div class="d-flex justify-content-center align-items-center" style="height:calc(100vh - 80px);background-image: url(assets/images/img-secundaria.png);background-size: cover;background-repeat: no-repeat;">
    <div class="col-4 bg-white p-3" style="background-color:#D9D9D9;">
        
        <form action="/institutions" method="post" id="novo-cadastro-instituicao">
            @csrf
            <h4 class="text-center fw-bold mb-3">Cadastrar instituição</h4>
            <div class="mb-3">
                <label class="block font-medium text-sm text-gray-700" for="nome">
                    Nome
                </label>
                <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="nome" type="text" name="nome" placeholder="Nome" autofocus="autofocus" required="required">
            </div>
            <div class="mb-3">
                <label class="block font-medium text-sm text-gray-700" for="rua">
                    Rua
                </label>
                <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="rua" type="text" name="rua" placeholder="Rua" autofocus="autofocus" required="required">
            </div>
            <div class="mb-3">
                <label class="block font-medium text-sm text-gray-700" for="bairro">
                    Bairro
                </label>
                <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="bairro" type="text" name="bairro" placeholder="Bairro" autofocus="autofocus" required="required">
            </div>
            <div class="d-flex justify-content-between mb-3" id="estado_cidade">
                <div class="col-7 ms-1">
                    <label class="block font-medium text-sm text-gray-700" for="cidade">
                        Cidade
                    </label>
                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="bairro" type="text" name="cidade" placeholder="Cidade" autofocus="autofocus" required="required">
                    {{-- <select class="form-select" name="cidade" id="cidade">
                        <option value="" selected>Cidade</option>
                    </select> --}}
                </div>
                <div class="me-1">
                    <label class="block font-medium text-sm text-gray-700" for="uf">
                        Estado
                    </label>
                    <select class="form-select" name="uf" id="uf" required="required">
                        <option selected>UF</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                        <option value="DF">DF</option>
                    </select>
                </div>
                
            </div>

            <div class="mb-3">
                <label class="block font-medium text-sm text-gray-700" for="localizacao">
                    Localização
                </label>
                <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="localizacao" type="text" name="localizacao" placeholder="Localizacao" autofocus="autofocus" required="required">
            </div>

            <div class="text-center">
                <button type="button" id="btn_save_institutions" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4">
                    Salvar
                </button>
            </div>

        </form>
    </div>
</div>
<div class="bg-danger text-light w-100 text-center position-absolute bottom-0 mb-0" id="error"></div>