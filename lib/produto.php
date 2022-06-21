<!--include_once("bd.php");

class produto
{

    private $id;
    private $nomep;
    private $linkp;


    public function getId()
    {
        return $this->id;
    }
 
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNomep()
    {
        return $this->nomep;
    }

    public function setNomep($nomep)
    {
        $this->nomep = $nomep;
    }

    public function getLinkp()
    {
        return $this->linkp;
    }

    public function setLinkp($linkp)
    {
        $this->linkp = $linkp;
    }

    function __construct()
    {
        $this->database = new Banco();
    }


    public function salvar()
    {
        $msg = "";
        try {

            $conn =  $this->database->conectar();

            $sql = "INSERT INTO produtos (nomeprod, linkprod) VALUES (:nomep, :linkp) ";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam (':nomep', $this->nomep, PDO::PARAM_STR);
            $stmt->bindParam (':linkp', $this->linkp, PDO::PARAM_STR);


           
            if ($stmt->execute() === true) {
                $msg = "<div class='sucesso'>Produto adicionado a sua wishlist com sucesso!</div>";
            }
        } catch (PDOException $e) {
            $msg = "<div class='erro'>Erro no banco de dados: " . $e->getMessage() . "</div>";
        } finally {
            return $msg;
        }
    }

    public function atualizar()
    {
        $msg = "";
        try {
            $conn =  $this->database->conectar();

            $sql = "UPDATE produtos SET nomeprod = :nomep, linkprod = :linkp WHERE id=:id ";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam (':id', $this->id, PDO::PARAM_INT);
            $stmt->bindParam (':nomep', $this->nomep, PDO::PARAM_STR);
            $stmt->bindParam (':linkp', $this->linkp, PDO::PARAM_STR);

            if ($stmt->execute() === true) {
                $msg = "<div class='sucesso'>Produto atualizado com Sucesso!</div>";
            }
        } catch (PDOException $e) {
            $msg = "<div class='erro'>Erro no banco de dados: " . $e->getMessage() . "</div>";
        } finally {
            return $msg;
        }
    }


    public function excluir()
    {
        try {

            $conn =  $this->database->conectar();
            $sql = "DELETE FROM produtos WHERE id=:id ";

            $stmt = $conn->prepare($sql);

            $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);


            if ($stmt->execute() === true) {
                $msg = "<div class='sucesso'>Produto Retirado da Sua wishlist com sucesso!!</div>";
            }
        } catch (PDOException $e) {
            $msg = "<div class='erro'>Erro no banco de dados: " . $e->getMessage() . "</div>";
        } finally {
            return $msg;
        }
    }

    public function listar(&$msg)
    {
        $produtos = array();
        $sql = "";
        try {
            $conn = $this->database->conectar();

            if (!empty($this->id)) {

                $sql = "SELECT * FROM produtos WHERE id=:id";
            } else {

                $sql = "SELECT * FROM produtos";
            }

            $stmt = $conn->prepare($sql);


            if (!empty($this->id)) $stmt->bindParam(':id', $this->id, PDO::PARAM_INT);

            if ($stmt->execute()) {

                $produtos = $stmt->fetchAll(PDO::FETCH_CLASS, "produto");
            }

            return $produtos;
        } catch (Exception $e) {
            $msg = "<div class='erro'>Erro no banco de dados: " . $e->getMessage() . "</div>";
        }
    }
} -->