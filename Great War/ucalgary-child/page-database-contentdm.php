<?php get_header(); /* Template Name: Database Template */ ?>
<div class="fieldable-panels-pane container-fluid brick text-cta">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="row-md-height">
          <div class="col-md-3 col-md-height col-md-middle vspacer-xs vspacer-sm headline">
            <h1><?php the_title(); ?></h1>
          </div>
          <div class="col-md-9 col-md-height col-md-middle description">
            <p>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
              the_content();
              endwhile; else: ?>
              <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>
          </p>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="fieldable-panels-pane container-fluid brick top-margin bottom-margin">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">

            <label class="input-group input-group-lg" style="width:100% !important;"><span class="hidden"> Search </span>
              <input type="text" class="form-control" ng-model="search" ng-model-options="{ debounce: 100 }" onclick="select()" style="width:100% !important;" placeholder="Search for..." id="search-input" autofocus />
              <input type="hidden" name="post_type" value="translation" />
              <span class="input-group-btn">
                <input class="btn btn-default btn-lg maroon-back" type="submit" alt="Search" value="Search" type="button" />
              </span>
            </label>

        </form>
      </div>
    </div>
  </div>
</div>

<div class="fieldable-panels-pane container-fluid brick top-margin bottom-margin">
  <div class="container">
    <div class="row">
      <div ng-if="!dmQuery">Loading results ...</div>
      <div ng-if="dmQuery">{{dmQuery.pager.total > 0 ? dmQuery.pager.total + ' results found.' : ''}}</div>
      <div class="pagination pagination-centered" ng-show="dmQuery.pager.total">
        <ul class="pagination-controle pagination">
          <li><button type="button" class="btn red-back" ng-disabled="dmCurPage == 0" ng-click="dmCurPage=dmCurPage-1">&lt; PREV</button></li>
          <li><span class="red">Page {{dmCurPage + 1}} of {{ dmNumberOfPages() }}</span></li>
          <li><button type="button" class="btn red-back" ng-disabled="dmCurPage >= dmQuery.pager.total/dmPageSize - 1" ng-click="dmCurPage = dmCurPage+1">NEXT &gt;</button></li>
        </ul>
      </div>
      <div ng-init="displayData()" ng-if="dmQuery.pager.total > 0">
          <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3 paginationclass" ng-repeat="datalist in dmQuery.records | pagination: dmCurPage * dmPageSize | limitTo: dmPageSize">
              <div class="DB-display">
                <div class="DB-content">
                  <img class="img-responsive DB-img-size center" width="100%" ng-src="{{ datalist.pointer=='N/A' ? 'https://library.ucalgary.ca/digital?group_id=14797' : 'https://cdm22007.contentdm.oclc.org/digital/api/singleitem/collection/cmh/id/' + datalist.pointer + '/thumbnail' }}">
                  <hr>
                  <div class="DB-title">
                    <strong>
                      <a href="https://cdm22007.contentdm.oclc.org/utils/ajaxhelper/?CISOROOT=cmh&CISOPTR={{ datalist.pointer + 1}}&action=2&DMSCALE=100&DMWIDTH=3000&DMHEIGHT=3000&DMX=0&DMY=0" target="_blank">{{ datalist.title }}</a>
                    </strong>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--
<div class="fieldable-panels-pane container-fluid brick top-margin bottom-margin">
  <div class="container">
    <div class="row">

      <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="DB-display">
          <div class="DB-content">
            <div class="DB-title"><h3><a href="">Test</a></h3></div>
            <div class="DB-icons">
              <ul class="list-inline list-unstyled">
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fas fa-globe-americas"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div> -->




<?php get_footer(); ?>
