<?php

class Context
{
    private $formatter;

    public function __construct(string $outputType)
    {
        switch ($outputType)
        {
            case "json":
                $this->formatter = new JSONFormatter();
                break;
            case "xml":
                $this->formatter = new XMLFormatter();
                break;
            case "string":
                $this->formatter = new StringFormatter();
                break;
            default:
                throw new \InvalidArgumentException("{$outputType} is not supported");
        }
    }

    public function formatData(array $data): string
    {
        return $this->formatter->format($data);
    }
}

interface OutputFormatter
{
    public function format(array $data): string;
}

class JSONFormatter implements OutputFormatter
{
    public function format(array $data): string
    {
        return json_encode($data);
    }
}

class XMLFormatter implements OutputFormatter
{
    public function format(array $data): string
    {
        $xml = $this->addData($data, new SimpleXMLElement('<root/>'));

        return $xml->asXML();
    }

    protected function addData(array $data, SimpleXMLElement $xml)
    {
        foreach ($data as $key => $value)
        {
            is_array($value) ? $this->addData($value, $xml->addChild($key)) : $xml->addChild($key, $value);
        }

        return $xml;
    }
}

class StringFormatter implements OutputFormatter
{
    const DELIMITTER = ",";

    public function format(array $data): string
    {
        return implode(self::DELIMITTER, $data);
    }
}
?>