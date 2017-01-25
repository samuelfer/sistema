<?php
/**
 * Created by PhpStorm.
 * User: saulo
 * Date: 21/01/17
 * Time: 07:58
 */

namespace SindicoAmigo\V1\Rest\Areacomum;


use Zend\Hydrator\HydratorInterface;

/**
 * Class AreacomumMapper
 * @package sindicoamigo\V1\Rest\AreaComum
 * Classe responsavel por transformar array em objeto e objeto em array
 */

class AreacomumMapper extends AreaComumEntity implements  HydratorInterface {

    /**
     * Extract values from an object
     *
     * @param  object $object
     * @return array
     */
    public function extract($object)
    {
        return [
            'id_cadastro_reserva_area_comum' => $object->id_cadastro_reserva_area_comum,
            'id_area_pai' => $object->id_area_pai,
            'id_tipo_area' => $object->id_tipo_area,
            'de_cadastro_reserva_area_comum' => $object->de_cadastro_reserva_area_comum,
            'de_materiais' => $object->de_materiais,
            'nu_valor' => $object->nu_valor,
            'hr_inicio' => $object->hr_inicio,
            'hr_fim' => $object->hr_fim,
            'tmp_duracao' => $object->tmp_duracao,
            'st_horario_sn' => $object->st_horario_sn,
            'ignora_qtd_reserva' => $object->ignora_qtd_reserva,
            'nu_antecedencia_max' => $object->nu_antecedencia_max,
            'nu_antecedencia_min' => $object->nu_antecedencia_min,
            'qtd_reserva_mes' => $object->qtd_reserva_mes,
            'perm_varias_reserva_dia' => $object->perm_varias_reserva_dia,
            'qtd_reserva_mes_gratis' => $object->qtd_reserva_mes_gratis,
            'qtd_reserva_ano_gratis' => $object->qtd_reserva_ano_gratis

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
        $object->id_cadastro_reserva_area_comum = $data['id_cadastro_reserva_area_comum'];
        $object->id_area_pai = $data['id_area_pai'];
        $object->id_tipo_area = $data['id_tipo_area'];
        $object->de_cadastro_reserva_area_comum = $data['de_cadastro_reserva_area_comum'];
        $object->de_materiais = $data['de_materiais'];
        $object->nu_valor = $data['nu_valor'];
        $object->hr_inicio = $data['hr_inicio'];
        $object->hr_fim = $data['hr_fim'];
        $object->tmp_duracao = $data['tmp_duracao'];
        $object->st_horario_sn = $data['st_horario_sn'];
        $object->ignora_qtd_reserva = $data['ignora_qtd_reserva'];
        $object->nu_antecedencia_max = $data['nu_antecedencia_max'];
        $object->nu_antecedencia_min = $data['nu_antecedencia_min'];
        $object->qtd_reserva_mes = $data['qtd_reserva_mes'];
        $object->perm_varias_reserva_dia = $data['perm_varias_reserva_dia'];
        $object->qtd_reserva_mes_gratis = $data['qtd_reserva_mes_gratis'];
        $object->qtd_reserva_ano_gratis = $data['qtd_reserva_ano_gratis'];

        return $object;
    }
}