<?php


/**
 *
 * @Entity @Table(name="post")
 */
class Post
{



    /**
     * @var int
     *
     * @Id @Column(type="integer") @GeneratedValue 
     **/
    private $id;

    /**
     *
     * @Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     *
     * @Column(name="body", type="text")
     */
    private $body;

    /**
     *
     * @Column(name="img", type="string", length=255)
     */
    private $img;


    /**
     * @Column(name="updated_at", type="datetime")
     */
    private $updated_at;

    /**
     * @var tags[]
     * @ManyToMany(targetEntity="Tag")
     * @JoinTable(name="post_tags",
     *      joinColumns={@JoinColumn(name="post_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="tag_id", referencedColumnName="id")}
     *      )
     */
    private $tags = null;


    public function __construct() {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set body
     *
     * @param string $body
     *
     * @return Post
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return Post
     */
    public function setImg($img)
    {

        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return bool
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Post
     */
    public function setUpdated_at($updatedAt)
    {
        if (is_string($updatedAt)){
            $updatedAt = new DateTime($updatedAt);
        }
        $this->updated_at = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    public function addTag($newTag){
        $exists = false;
        foreach($this->tags as $tag){
            if ($tag->getName() == $newTag->getName()){
                $exists = true;
                break;
            }
        }
        if (!$exists)
            $this->tags[] = $newTag;
    }

    public function setTags($tags)
    {
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        foreach($tags as $tag)
            $this->addTag($tag);
        return $this;
    }

    public function getTags(){
        return $this->tags;
    }

    public function removeTagById($id){
        $tags = $this->tags;
        $this->tags = new \Doctrine\Common\Collections\ArrayCollection();
        foreach ($tags as $tag){
            if ($tag->getId() == $id) continue;
            $this->addTag($tag);
        }
        return $this;
    }


    public function getTagNames(){
        $tagNames = array();
        foreach ($this->tags as $tag){
            $tagNames[] = $tag->getName();
        }
        return $tagNames;
        print_r($tagNames);exit();
    }


}

