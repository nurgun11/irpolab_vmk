<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class My_Custom_Exportable_Table extends LLMS_Abstract_Exportable_Admin_Table {

    public function get_export( $args = array() ) {

        // Получаем результаты из базы данных
        $this->get_results( $args );

        $export = array();
        if ( 1 === $this->current_page ) {
            $export[] = $this->get_export_header();
        }

        foreach ( $this->get_tbody_data() as $row ) {
            $row_data = array();
            foreach ( array_keys( $this->get_columns( 'export' ) ) as $row_key ) {
                // Изменяем данные перед добавлением в экспорт
                $row_data[ $row_key ] = $this->modify_export_data( $row_key, $row );
            }
            $export[] = $row_data;
        }

        return $export;
    }

    /**
     * Modify export data before adding to export file
     *
     * @param string $key  The column id / key.
     * @param mixed  $data Object / array of data that the function can use to extract the data.
     * @return mixed
     */
    public function modify_export_data( $key, $data ) {
        // Ваша логика для изменения данных
        $modified_data = $this->get_export_data( $key, $data );

        // Удаляем определенные столбцы данных
        $columns_to_remove = array( 'name');
        if ( in_array( $key, $columns_to_remove ) ) {
            return null; // Возвращаем null, чтобы удалить столбец
        }

        return $modified_data;
    }
}
