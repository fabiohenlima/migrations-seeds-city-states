<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert(array (
            0 =>
            array (
                'id' => '1',
                'nome' => 'Acre',
                'uf' => 'AC',
                'codigo' => '12',
                'slug' => 'acre',
                'populacao' => '816687',
            ),
            1 =>
            array (
                'id' => '2',
                'nome' => 'Alagoas',
                'uf' => 'AL',
                'codigo' => '27',
                'slug' => 'alagoas',
                'populacao' => '3358963',
            ),
            2 =>
            array (
                'id' => '3',
                'nome' => 'Amazonas',
                'uf' => 'AM',
                'codigo' => '13',
                'slug' => 'amazonas',
                'populacao' => '4001667',
            ),
            3 =>
            array (
                'id' => '4',
                'nome' => 'Amapá',
                'uf' => 'AP',
                'codigo' => '16',
                'slug' => 'amapa',
                'populacao' => '782295',
            ),
            4 =>
            array (
                'id' => '5',
                'nome' => 'Bahia',
                'uf' => 'BA',
                'codigo' => '29',
                'slug' => 'bahia',
                'populacao' => '15276566',
            ),
            5 =>
            array (
                'id' => '6',
                'nome' => 'Ceará',
                'uf' => 'CE',
                'codigo' => '23',
                'slug' => 'ceara',
                'populacao' => '8963663',
            ),
            6 =>
            array (
                'id' => '7',
                'nome' => 'Distrito Federal',
                'uf' => 'DF',
                'codigo' => '53',
                'slug' => 'distrito-federal',
                'populacao' => '2977216',
            ),
            7 =>
            array (
                'id' => '8',
                'nome' => 'Espírito Santo',
                'uf' => 'ES',
                'codigo' => '32',
                'slug' => 'espirito-santo',
                'populacao' => '3973697',
            ),
            8 =>
            array (
                'id' => '9',
                'nome' => 'Goiás',
                'uf' => 'GO',
                'codigo' => '52',
                'slug' => 'goias',
                'populacao' => '6695855',
            ),
            9 =>
            array (
                'id' => '10',
                'nome' => 'Maranhão',
                'uf' => 'MA',
                'codigo' => '21',
                'slug' => 'maranhao',
                'populacao' => '6954036',
            ),
            10 =>
            array (
                'id' => '11',
                'nome' => 'Minas Gerais',
                'uf' => 'MG',
                'codigo' => '31',
                'slug' => 'minas-gerais',
                'populacao' => '20997560',
            ),
            11 =>
            array (
                'id' => '12',
                'nome' => 'Mato Grosso do Sul',
                'uf' => 'MS',
                'codigo' => '50',
                'slug' => 'mato-grosso-do-sul',
                'populacao' => '2682386',
            ),
            12 =>
            array (
                'id' => '13',
                'nome' => 'Mato Grosso',
                'uf' => 'MT',
                'codigo' => '51',
                'slug' => 'mato-grosso',
                'populacao' => '3305531',
            ),
            13 =>
            array (
                'id' => '14',
                'nome' => 'Pará',
                'uf' => 'PA',
                'codigo' => '15',
                'slug' => 'para',
                'populacao' => '8272724',
            ),
            14 =>
            array (
                'id' => '15',
                'nome' => 'Paraiba',
                'uf' => 'PB',
                'codigo' => '25',
                'slug' => 'paraiba',
                'populacao' => '3999415',
            ),
            15 =>
            array (
                'id' => '16',
                'nome' => 'Pernambuco',
                'uf' => 'PE',
                'codigo' => '26',
                'slug' => 'pernambuco',
                'populacao' => '9410336',
            ),
            16 =>
            array (
                'id' => '17',
                'nome' => 'Piauí',
                'uf' => 'PI',
                'codigo' => '22',
                'slug' => 'piaui',
                'populacao' => '3212180',
            ),
            17 =>
            array (
                'id' => '18',
                'nome' => 'Paraná',
                'uf' => 'PR',
                'codigo' => '41',
                'slug' => 'parana',
                'populacao' => '11242720',
            ),
            18 =>
            array (
                'id' => '19',
                'nome' => 'Rio de Janeiro',
                'uf' => 'RJ',
                'codigo' => '33',
                'slug' => 'rio-de-janeiro',
                'populacao' => '16635996',
            ),
            19 =>
            array (
                'id' => '20',
                'nome' => 'Rio Grande do Norte',
                'uf' => 'RN',
                'codigo' => '24',
                'slug' => 'rio-grande-do-norte',
                'populacao' => '3474998',
            ),
            20 =>
            array (
                'id' => '21',
                'nome' => 'Rondônia',
                'uf' => 'RO',
                'codigo' => '11',
                'slug' => 'rondonia',
                'populacao' => '1787279',
            ),
            21 =>
            array (
                'id' => '22',
                'nome' => 'Roraima',
                'uf' => 'RR',
                'codigo' => '14',
                'slug' => 'roraima',
                'populacao' => '514229',
            ),
            22 =>
            array (
                'id' => '23',
                'nome' => 'Rio Grande do Sul',
                'uf' => 'RS',
                'codigo' => '43',
                'slug' => 'rio-grande-do-sul',
                'populacao' => '11286500',
            ),
            23 =>
            array (
                'id' => '24',
                'nome' => 'Santa Catarina',
                'uf' => 'SC',
                'codigo' => '42',
                'slug' => 'santa-catarina',
                'populacao' => '6910553',
            ),
            24 =>
            array (
                'id' => '25',
                'nome' => 'Sergipe',
                'uf' => 'SE',
                'codigo' => '28',
                'slug' => 'sergipe',
                'populacao' => '2265779',
            ),
            25 =>
            array (
                'id' => '26',
                'nome' => 'São Paulo',
                'uf' => 'SP',
                'codigo' => '35',
                'slug' => 'sao-paulo',
                'populacao' => '44749699',
            ),
            26 =>
            array (
                'id' => '27',
                'nome' => 'Tocantins',
                'uf' => 'TO',
                'codigo' => '17',
                'slug' => 'tocantins',
                'populacao' => '1532902',
            ),
        ));
    }
}
