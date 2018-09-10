<?php

namespace AppBundle\EventListener;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use AppBundle\Entity\Employe;
use AppBundle\FileUploader;
//use Proxies\__CG__\AppBundle\Entity\Employe;

class CvUploadListener
{
    private $uploader;

    public function __construct(FileUploader $uploader)
    {
        $this->uploader = $uploader;
    }

    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    public function preUpdate(PreUpdateEventArgs $args)
    {
        $entity = $args->getEntity();

        $this->uploadFile($entity);
    }

    private function uploadFile($entity)
    {
        // upload only works for Product entities
        if (!$entity instanceof Employe) {
            return;
        }

        $file = $entity->getCv();

        // only upload new files
        if (!$file instanceof UploadedFile) {
            return;
        }

        $fileName = $this->uploader->upload($file);
        $entity->setCv($fileName);
    }
    public function postLoad(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        $fileName = $entity->getCv();

        $entity->setCv(new File($this->targetPath.'/'.$fileName));
    }

}