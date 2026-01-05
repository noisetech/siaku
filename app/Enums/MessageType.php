<?php


namespace App\Enums;

enum MessageType: string
{
    case CREATED = 'Berhasil menambahkan';
    case UPDATED = 'Berhasil menmperbarui';
    case DELETED = 'Berhasil menghapus';
    case ERROR = 'Terjadi kesalahan. silahkan coba lagi nanti';

    public function message(string $entity =  '', ?string $error = null): string
    {
        if ($this === MessageType::ERROR && $error) {
            return "{$this->value} : {$error}";
        }
        return "{$this->value} : {$entity}";
    }
}
