<?php

namespace ManageStudent\Service\FileModel;

class FileModelLoadXLSX implements FileModelLoadInterface
{
    public function getListFileModel(): array
    {
        return [
            \ManageStudent\Service\FileModel\FileModelXLSX_ExportEtudiant::class
        ];
    }
}