# php-uuid-v6

UUID v6 implementation as proposed at https://bradleypeabody.github.io/uuidv6/

## Example usage

    for ($i = 0; $i < 10; $i++) {
        echo \mikemix\Uuid::uuid6() , PHP_EOL;
    }
    
    > 1e859157-d7dc-6078-b7b8-02421fa799ff
    > 1e859157-d7e3-64d6-9819-02421fa799ff
    > 1e859157-d7e3-6602-8ecf-02421fa799ff
    > 1e859157-d7e3-66fc-9898-02421fa799ff
    > 1e859157-d7e3-67ec-ae4c-02421fa799ff
    > 1e859157-d7e3-68d2-810a-02421fa799ff
    > 1e859157-d7e3-69c2-b7cc-02421fa799ff
    > 1e859157-d7e3-6aa8-871b-02421fa799ff
    > 1e859157-d7e3-6b98-85c3-02421fa799ff
    > 1e859157-d7e3-6c7e-a2c7-02421fa799ff
