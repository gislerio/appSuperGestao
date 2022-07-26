<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterProdutosRelacionamentoFornecedores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //criando a coluna em produtos que vai receber o fk de fornecedores
        Schema::table('produtos', function (Blueprint $table) {
            //inserir um registro de fornecedors para estabelecer o relacionamento
            $fornecedorId = DB::table('fornecedores')->insertGetId([
                'nome' => 'fornecedor padrão SG',
                'site' => 'fornecedorpadraosg.com.br',
                'uf' => 'MG',
                'email' => 'contato@fornecedorpadraosg.com.br'
            ]);
            $table->unsignedBigInteger('fornecedor_id')->default($fornecedorId)->after('id');
            $table->foreign('fornecedor_id')->references('id')->on('fornecedores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropForeign('produto_fornecedor_id_foreign');
            $table->dropColumn('fornecedor_id');
        });
    }
}
