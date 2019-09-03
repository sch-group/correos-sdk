<?php


namespace CorreosSdk\Factories;


class DocumentList
{
    /**
     * @var
     */
    private $documentListArray;

    public function __construct()
    {
        $this->documentListArray = [];
    }

    public function addDocument(Document $document)
    {
      array_push($this->documentListArray, $document);
    }

    /**
     * @return Document
     */
    public function getFirstDocument() : Document
    {
        return $this->getDocumentByIndex(0);
    }

    /**
     * @return Document
     */
    public function getSecondDocument() : Document
    {
        return $this->getDocumentByIndex(1);
    }

    /**
     * @return Document
     */
    public function getThirdDocument() : Document
    {
        return $this->getDocumentByIndex(2);
    }

    /**
     * @param int $index
     * @return Document
     */
    private function getDocumentByIndex(int $index) : Document
    {
        if(!empty($this->documentListArray[$index])) {
            return $this->documentListArray[$index];
        }
        return new Document();
    }

}