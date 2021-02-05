<!--
author：MierX
github：https://github.com/MierX/StudyPhp 
create time：21.1.12 14:41
motto：有志者，事竟成
-->
<?php

class model
{

    static $self = null;
    protected $fields = '*';
    protected $table = '';
    protected $where = '';
    protected $group = '';
    protected $order = '';
    protected $limit = '';
    private $config = [
        'host' => 'localhost',
        'port' => '3306',
        'user' => 'root',
        'pass' => '123456',
        'charset' => 'utf8',
        'dbname' => 'study'
    ];

    private function __construct($tableName)
    {

        $this->table = $tableName;

        // 连接数据库
        $this->link = @mysql_connect("{$this->config['host']}:{$this->config['port']}", "{$this->config['user']}", "{$this->config['pass']}") or die();

        // 设置编码
        $this->setCharset($this->config['charset']);

        // 选择数据库
        $this->selectDB($this->config['dbname']);
    }

    public function setCharset($charset)
    {

        $this->query("set names {$charset}");
    }

    private function query($sql)
    {

        $rs = mysql_query($sql);
        if ($rs) {
            return $rs;
        } else {
            echo "<p>sql语句执行失败，请参考如下信息：</p>";
            echo "<p>错误代号：" . mysql_errno() . "</p>";
            echo "<p>错误信息：" . mysql_error() . "</p>";
            echo "<p>错误语句：" . $sql . "</p>";
            die();
        }
    }

    public function selectDB($dbname)
    {

        $this->query("use {$dbname}");
    }

    static function getInstance($tableName)
    {

        if (!isset(self::$self)) {
            self::$self = new self($tableName);
        }

        return self::$self;
    }

    function field($fields)
    {


        $this->fields = $fields;
        return $this;
    }

    function where($where)
    {

        if (is_array($where)) {
            $_where = $where;
            $where = '';
            foreach ($_where as $key => $value) {
                $where .= "{$key} = {$value}, ";
            }
            $where = substr($where, 0, strlen($where) - 2);
        }
        $this->where = $where;
        return $this;
    }

    function order($order)
    {

        $this->order = $order;
        return $this;
    }

    function limit($limit)
    {

        $this->limit = $limit;
        return $this;
    }

    function select()
    {

        if (!$this->table) {
            return false;
        }

        $this->fields = $this->fields ?: '*';
        $sql = "SELECT {$this->fields} FROM {$this->table}";

        if ($this->where) {
            $sql .= " WHERE {$this->where}";
        }

        if ($this->group) {
            $sql .= " GROUP BY {$this->group}";
        }

        if ($this->order) {
            $sql .= " ORDER BY {$this->order}";
        }

        if ($this->limit) {
            $sql .= " LIMIT {$this->limit}";
        }

        return $this->getRows($sql);
    }

    // 这个方法为了执行一条返回多行数据的语句，返回二维数组
    function getRows($sql)
    {

        $rs = $this->query($sql);
        $arr = [];
        while ($rec = mysql_fetch_assoc($rs)) {
            $arr[] = $rec;
        }
        return $arr;
    }


    // 这个方法为了执行一条返回一行数据的语句，返回一维数组
    function getOneRow($sql)
    {

        $rs = $this->query($sql);
        return mysql_fetch_assoc($rs);
    }

    function add($data)
    {

        if (!$this->table) {
            return false;
        }

        if (!is_array($data)) {
            return false;
        }

        $fields = $values = '';
        foreach ($data as $key => $value) {
            $fields .= "`{$key}`, ";
            $values .= "'{$value}', ";
        }
        $fields = substr($fields, 0, strlen($fields) - 2);
        $values = substr($values, 0, strlen($values) - 2);
        $sql = "INSERT INTO {$this->table}({$fields}) VALUES({$values})";
        return $this->exec($sql);
    }


    // 这个方法为了执行一条增删改语句，返回真假结果
    function exec($sql)
    {

        $this->query($sql);
        return true;
    }
}