<template>
    <div class="columns">
        <div class="column is-3 aside-menu">
            <SectionNav />
        </div>
        <div class="column is-9">
                <div class="card">
                <div class="header">
                    <div class="media">
                        <div class="media-left">
                            <figure class="image is-48x48">
                                <img src="https://source.unsplash.com/random/96x96" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <p class="title is-4">John Smith</p>
                            <p class="subtitle is-6">@johnsmith</p>
                        </div>
                    </div>
                </div>
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="https://source.unsplash.com/random/1280x960" alt="Placeholder image">
                    </figure>
                </div>
                <div class="card-content">
                    

                    <div class="content">
                        <p></p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                        
                        <time datetime="2018-1-1">11:09 PM - 1 Jan 2018</time>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="level is-mobile">
                        <div class="level-left">
                            <div class="level-item has-text-centered">
                                <a href="">
                                    <i class="fa fa-thumbs-up"></i>
                                </a>
                                <span>32</span>
                            </div>
                            <div class="level-item has-text-centered">
                                <a href="">
                                    <i class="fa fa-thumbs-down"></i>
                                </a>
                            </div>
                            <div class="level-item has-text-centered">
                                <div>
                                    <a href="">
                                        <i class="fa fa-comments"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import SectionNav from './SectionNav'
export default {
    components: {
        SectionNav
    }
}
</script>

<style lang="">
    
</style>