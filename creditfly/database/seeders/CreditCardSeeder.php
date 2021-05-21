<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CreditCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('credit_cards')->insert([
            'name' => 'Tarjeta de crédito Santander Free',
            'cat' =>76.6,
            'tasa_interes' =>58.39,
            'requisitos' => 'Tener entre 20 y 69 años 11 meses de edad.
            Ingresos mínimos de $7,500 MXN mensuales.
            Llenar y firmar la Solicitud Única de Tarjeta de Crédito Santander, seleccionando la opción Free.
            Copia de una identificación oficial vigente (credencial de elector o pasaporte). En caso de ser extranjero, pasaporte vigente y copia del documento migratorio FM2.
            Copia de comprobante de domicilio no mayor a 2 meses (teléfono fijo, agua, predial, gas entubado, luz o estados de cuenta emitidos por Santander), solo si la credencial de elector es diferente a la dirección actual.
            Copia de tus dos últimos comprobantes de ingresos o declaraciones de impuestos.',
            'beneficios' => '¡Sin anualidad al gastar por lo menos $200 MXN mensuales!
            Elige un plan de recompensas o un seguro gratis:
            Programa de Recompensas: 1 punto por cada dólar gastado.
            Plan seguridad: asistencia legal, médica y vial en México y el extranjero.
            Plan viajero: tienes asegurado tu equipaje contra pérdidas.
            Seguros Mastercard nivel Oro'
        ]);
        DB::table('credit_cards')->insert([
            'name' => 'Tarjeta Azul BBVA',
            'cat' =>101.4,
            'comision' =>699,
            'requisitos' => 'Ser mayor de 18 años
            Residir en México
            Ingreso mínimo mensual de $6,000.00',
            'beneficios' => '9% de tus compras en Puntos BBVA

            Ofertas de estreno al contratar
            
            Realiza operaciones desde la app BBVA México
            
            Descarga BBVA Wallet y compra con seguridad por internet
            
            Paga en miles de comercios
            
            Obtén tarjetas adicionales sin costo'
        ]);
        DB::table('credit_cards')->insert([
            'name' => 'Tarjeta Banregio MÁS',
            'cat' =>30.3,
            'tasa_interes' =>26.42,
            'requisitos' => 'Tener tarjeta de crédito bancaria activa con al menos 12 meses de buen uso
            Persona fisíca y persona física con actividad empresarial
            Edad entre 18 y 80 años
            $25,000 ingreso mínimo mensual
            Buen historial crediticio',
            'beneficios' => 'Sin anualidad
            Gana el 1% en efectivo por tus compras y las de tus amigos
            Sin penalizaciones por pago tardío en caso de atraso
            Transfiere la deuda de tus tarjetas de otros bancos con un 25% de descuento sobre tu tasa de interés, definido a 6 o 12 meses
            Seguro de Protección de Precios Visa por hasta 200 USD al año
            Tú decides si pagar con tu línea de crédito o con tus recompensas'
        ]);
        DB::table('credit_cards')->insert([
            'name' => 'Tarjeta de Crédito Clásica Citibanamex',
            'cat' =>74.1,
            'comision' =>716,
            'tasa_interes' =>54.20,
            'requisitos' => '
            Contar con 18 años de edad.
            
            Identificación oficial vigente.
            
            $7,000 de ingreso mensual
            mínimo comprobable.
            
            Comprobante de domicilio.',
            'beneficios' => 'Acumula Puntos Premia y cámbialos por efectivo.
            Realiza compras más seguras usando tu NIP
            Haz pagos fijos en salud
            Obtén meses sin intereses
            '
        ]);
    }
}
