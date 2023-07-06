<?php

class Message {
    private int $messageId;
    public int $chatId;
    private int $senderId;
    private string $message;
    private int $productId;

    /**
     * Get the value of messageId
     */ 
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * Set the value of messageId
     *
     * @return  self
     */ 
    public function setMessageId($messageId)
    {
        $this->messageId = $messageId;

        return $this;
    }

    /**
     * Get the value of chatId
     */ 
    public function getChatId()
    {
        return $this->chatId;
    }

    /**
     * Set the value of chatId
     *
     * @return  self
     */ 
    public function setChatId($chatId)
    {
        $this->chatId = $chatId;

        return $this;
    }

    /**
     * Get the value of senderId
     */ 
    public function getSenderId()
    {
        return $this->senderId;
    }

    /**
     * Set the value of senderId
     *
     * @return  self
     */ 
    public function setSenderId($senderId)
    {
        $this->senderId = $senderId;

        return $this;
    }

    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get the value of productId
     */ 
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set the value of productId
     *
     * @return  self
     */ 
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }
    
}