<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 21/01/17
 * Time: 10:50
 */

namespace SindicoAmigo\V1\Rest\Configuracao;


use Zend\Hydrator\HydratorInterface;

class ConfiguracaoMapper  extends AreaComumEntity implements  HydratorInterface

{

    /**
     * Extract values from an object
     *
     * @param  object $object
     * @return array
     */
    public function extract($object)
    {
        return [
            'id_configuracao' => $object->id_configuracao,
            'nu_dia_antecedencia' => $object->nu_dia_antecedencia,
            'qtd_reserva_mes' => $object->qtd_reserva_mes,
            'perm_varias_reserva_dia' => $object->perm_varias_reserva_dia

        ];
    }

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array $data
     * @param  object $object
     * @return object
     */
    public function hydrate(array $data, $object)
    {
        $object->id_configuracao = $data['id_configuracao'];
        $object->nu_dia_antecedencia = $data['nu_dia_antecedencia'];
        $object->qtd_reserva_mes = $data['qtd_reserva_mes'];
        $object->perm_varias_reserva_dia = $data['perm_varias_reserva_dia'];

        return $object;
    }
}