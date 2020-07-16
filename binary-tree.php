<!-- Given a binary tree, find the height of the binary tree. (Mandatory)
Input: Root node of the tree 
Output: Height of the tree -->

<!DOCTYPE html>  
<html>  
<body>  
<?php  
//Represent a node of binary tree  
class Node{  
    public $data;  
    public $left;  
    public $right;  
      
    function __construct($data){  
        //Assign data to the new node, set left and right children to NULL  
        $this->data = $data;  
        $this->left = NULL;  
        $this->right = NULL;  
    }  
}  
class BinaryTree{  
    //Represent the root of binary tree  
    public $root;  
    function __construct(){  
        $this->root = NULL;  
    }  
      
    //findHeight() will determine the maximum height of the binary tree  
    function findHeight($temp){  
        //Check whether tree is empty  
        if($this->root == null) {  
             print "Tree is empty <br>";  
            return 0;  
        }  
        else {  
            $leftHeight = 0;  
            $rightHeight = 0;  
            //Calculate the height of left subtree  
            if($temp->left != NULL)  
                $leftHeight = $this->findHeight($temp->left);  
              
            //Calculate the height of right subtree  
            if($temp->right != NULL)  
                $rightHeight = $this->findHeight($temp->right);  
              
            //Compare height of left subtree and right subtree   
            //and store maximum of two in variable max  
            $max = ($leftHeight > $rightHeight) ? $leftHeight : $rightHeight;  
              
            //Calculate the total height of tree by adding height of root  
            return ($max + 1);  
        }  
     }  
}  
$bt = new BinaryTree();  
//Add nodes to the binary tree  
$bt->root = new Node(1);  
$bt->root->left = new Node(2);  
$bt->root->right = new Node(3);  
$bt->root->left->left = new Node(4);  
$bt->root->right->left = new Node(5);  
$bt->root->right->right = new Node(6);  
$bt->root->right->right->right= new Node(7);  
$bt->root->right->right->right->right = new Node(8);  
      
//Display the maximum height of the given binary tree  
print "Maximum height of given binary tree: " . $bt->findHeight($bt->root);  
?>  
</body>  
</html>  