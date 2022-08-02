<?php

class __Mustache_2457a108edfeabc4ef3b1ccd64aeb552 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<!--working:-->
';
        $buffer .= $indent . '<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>-->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id=\'pdfannotator_index\' class=\'pdfannotator_index\'>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div id="pdftoolbar" class="toolbar col-md-12">
';
        $buffer .= $indent . '            <div id="toolbarContent"> 
';
        $buffer .= $indent . '                <button id="pdfannotator_cursor" class="cursor" type="button" title="Cursor" data-tooltype="cursor"><i class="fa fa-hand-pointer-o" aria-hidden="true"></i></button>
';
        $buffer .= $indent . '                <div class="spacer"></div>
';
        $buffer .= $indent . '                <button class="comment" type="button" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0ee1f9018e37c0523b39bf3d4d264560($context, $indent, $value);
        $buffer .= '" data-tooltype="point">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section8a142aa03c29486cde1fea502b979e46($context, $indent, $value);
        $buffer .= '</button>           
';
        $buffer .= $indent . '                <button class="pdfannotator_rectangle" type="button" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section0929b5148c204034314cc2cc2d338765($context, $indent, $value);
        $buffer .= '" data-tooltype="area">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionC503213f9f371d74fff5246a50c24b92($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                <button class="pdfannotator_highlight" type="button" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section1cc17c06a208a44f14a92494eb78de5c($context, $indent, $value);
        $buffer .= '" data-tooltype="highlight">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionD3053077e30b9f35a788e5de47570043($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                <button class="pdfannotator_strikeout" type="button" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section8737177818bf2fc3ed3cc1fe29dacb32($context, $indent, $value);
        $buffer .= '" data-tooltype="strikeout">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->section9197314633d3527c6554d7211793ac69($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                <div class="spacer"></div>
';
        $buffer .= $indent . '
';
        // 'usestudenttextbox' section
        $value = $context->find('usestudenttextbox');
        $buffer .= $this->section3afca0bd70f1e5af6c1a65e520c8f175($context, $indent, $value);
        $buffer .= $indent . '
';
        // 'usestudentdrawing' section
        $value = $context->find('usestudentdrawing');
        $buffer .= $this->section88119086be709e73478a56d7ef0e3664($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <span class="toolbaritem">
';
        $buffer .= $indent . '                    <button id="scaleMinus" class="" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4a153e010c43e3a8cab3033f032b5697($context, $indent, $value);
        $buffer .= '" alt="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4a153e010c43e3a8cab3033f032b5697($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <i class="icon fa fa-minus-circle fa-lg" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4a153e010c43e3a8cab3033f032b5697($context, $indent, $value);
        $buffer .= '" alt="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section4a153e010c43e3a8cab3033f032b5697($context, $indent, $value);
        $buffer .= '"></i>
';
        $buffer .= $indent . '                    </button><!--
';
        $buffer .= $indent . '                 --><button id="scalePlus" class="" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD8984f749c88855af069f6a7eaa4efe5($context, $indent, $value);
        $buffer .= '" alt="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD8984f749c88855af069f6a7eaa4efe5($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <i class="icon fa fa-plus-circle fa-lg" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD8984f749c88855af069f6a7eaa4efe5($context, $indent, $value);
        $buffer .= '" alt="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionD8984f749c88855af069f6a7eaa4efe5($context, $indent, $value);
        $buffer .= '"></i>
';
        $buffer .= $indent . '                    </button>
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '                <select class="scale" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC07ffbdba8be0329f489eee3e02798a1($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    <option value="0.5">50%</option>
';
        $buffer .= $indent . '                    <option value="0.75">75%</option>
';
        $buffer .= $indent . '                    <option value="1">100%</option>
';
        $buffer .= $indent . '                    <option value="1.33">133%</option>
';
        $buffer .= $indent . '                    <option value="1.5">150%</option>
';
        $buffer .= $indent . '                    <option value="2">200%</option>
';
        $buffer .= $indent . '                </select>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <!--<a href="javascript://" class="rotate-ccw" title="Rotate Counter Clockwise">⟲</a>-->
';
        $buffer .= $indent . '                <!--<a href="javascript://" class="rotate-cw" title="Rotate Clockwise">⟳</a>-->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="spacer"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <a href="javascript://" class="hideComments" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC07b2d118fc6c9d06c6379dadcf5541d($context, $indent, $value);
        $buffer .= '"><img class="icon " alt="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC07b2d118fc6c9d06c6379dadcf5541d($context, $indent, $value);
        $buffer .= '" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC07b2d118fc6c9d06c6379dadcf5541d($context, $indent, $value);
        $buffer .= '" src=';
        $value = $this->resolveValue($context->find('pixhide'), $context);
        $buffer .= $value;
        $buffer .= '></a><!--"/moodle/theme/image.php/clean/core/1504678549/e/accessibility_checker"-->
';
        $buffer .= $indent . '                <a href="javascript://" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionAe79439d1a63d865b1d8efc2028249e8($context, $indent, $value);
        $buffer .= '" onclick="makeFullScreen()">';
        // 'pix' section
        $value = $context->find('pix');
        $buffer .= $this->sectionF9ff102ffc2891c52921472dfe7b568b($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                <div class="spacer"></div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <span class="toolbaritem">
';
        $buffer .= $indent . '                    <button id="prevPage" class="" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCf458f0ed146af773eee36c5b61a29ea($context, $indent, $value);
        $buffer .= '" alt="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCf458f0ed146af773eee36c5b61a29ea($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <i class="icon fa fa-arrow-circle-up fa-lg" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCf458f0ed146af773eee36c5b61a29ea($context, $indent, $value);
        $buffer .= '" alt="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionCf458f0ed146af773eee36c5b61a29ea($context, $indent, $value);
        $buffer .= '"></i>
';
        $buffer .= $indent . '                    </button><!--
';
        $buffer .= $indent . '                  --><button id="nextPage" class="" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9c5b2e90149fa4ba07f546fdf07c22b8($context, $indent, $value);
        $buffer .= '" alt="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9c5b2e90149fa4ba07f546fdf07c22b8($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <i class="icon fa fa-arrow-circle-down fa-lg" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9c5b2e90149fa4ba07f546fdf07c22b8($context, $indent, $value);
        $buffer .= '" alt="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9c5b2e90149fa4ba07f546fdf07c22b8($context, $indent, $value);
        $buffer .= '"></i>
';
        $buffer .= $indent . '                     </button>
';
        $buffer .= $indent . '                    <input id="currentPage" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionC11c4c8b894ab45caaed55863162f509($context, $indent, $value);
        $buffer .= '" type="number" min="1" value="1"> / 
';
        $buffer .= $indent . '                    <span id="sumPages" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section9f0e12c4f4e4f2f8ad59a2b358457f29($context, $indent, $value);
        $buffer .= '">1</span>
';
        $buffer .= $indent . '                </span>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="spacer"></div>
';
        $buffer .= $indent . '
';
        // 'useprint' section
        $value = $context->find('useprint');
        $buffer .= $this->section12c6bb33d5e848ef86c73f37353a7398($context, $indent, $value);
        // 'useprintcomments' section
        $value = $context->find('useprintcomments');
        $buffer .= $this->section470f4b34f6e007cabf386ef102691e75($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <button id="toolbar-dropdown-button" class="pdf-annotator-hidden" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
';
        $buffer .= $indent . '                    <i class="icon fa fa-bars fa-lg"></i>
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '            </div>    
';
        $buffer .= $indent . '            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
';
        $buffer .= $indent . '                <div class="navbar-nav">
';
        $buffer .= $indent . '                    <div id="toolbar-dropdown-content" class="row">
';
        $buffer .= $indent . '                     </div>     
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '  
';
        $buffer .= $indent . '    <div class="row-fluid row" id="body-wrapper">
';
        $buffer .= $indent . '        <div class="span8 col-lg-8" id="content-wrapper">
';
        $buffer .= $indent . '            <div id="viewer" class="pdfViewer"></div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="span4 col-lg-4" id="comment-wrapper">
';
        $buffer .= $indent . '                <h4>';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section261db160e2afc5af39f833d9e4b6aa74($context, $indent, $value);
        $buffer .= '</h4>
';
        $buffer .= $indent . '                <div id="comment-nav">
';
        $buffer .= $indent . '                    <button id="allQuestions" class="btn-link" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA2f51d5cc0ded11c6d2b22b16577fce6($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <i title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA2f51d5cc0ded11c6d2b22b16577fce6($context, $indent, $value);
        $buffer .= '" class="icon fa fa-book fa-fw"></i>
';
        $buffer .= $indent . '                    </button>
';
        $buffer .= $indent . '                    <button id="questionsOnThisPage" class="btn-link" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section57d62bb46624fa98d54d48e0a9fb82a0($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <i title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section57d62bb46624fa98d54d48e0a9fb82a0($context, $indent, $value);
        $buffer .= '" class="icon fa fa-comments fa-fw"></i>
';
        $buffer .= $indent . '                    </button>
';
        $buffer .= $indent . '                    <button id="searchButton" class="btn-link" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE2f584fb87bc07e15b7408039647ee58($context, $indent, $value);
        $buffer .= '" alt="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE2f584fb87bc07e15b7408039647ee58($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                        <i class="icon fa fa-search fa-fw" title="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE2f584fb87bc07e15b7408039647ee58($context, $indent, $value);
        $buffer .= '" alt="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionE2f584fb87bc07e15b7408039647ee58($context, $indent, $value);
        $buffer .= '"></i>
';
        $buffer .= $indent . '                    </button>
';
        $buffer .= $indent . '                    <form id="searchForm">
';
        $buffer .= $indent . '                        <input type="search" id="searchPattern" class="form-control" name="pattern" placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionB8c571c3696321139576b7d6e4f99196($context, $indent, $value);
        $buffer .= '">      
';
        $buffer .= $indent . '                        <button type="submit" id="searchClear">
';
        $buffer .= $indent . '                            <i class="icon fa fa-times fa-fw"></i>
';
        $buffer .= $indent . '                        </button>
';
        $buffer .= $indent . '                    </form>                    
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            <div class="comment-list">
';
        $buffer .= $indent . '                <div class="comment-list-container">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <form id="comment-list-form" class="comment-list-form" style="display:none;">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <textarea id="myarea" placeholder="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section1d8373915755449f7c59ffca8f6f8e2f($context, $indent, $value);
        $buffer .= '" cols="40" rows="3"></textarea>                 
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div id="anonymousDiv" class="row-fluid row">
';
        $buffer .= $indent . '                        <input type="checkbox" name="visibility" value="anonymous" id="anonymousCheckbox" class="pdfannotator-radio" style="width:auto;"><label id="anonymousLabel" for="anonymousCheckbox">';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->sectionA13ec5bf253e8f473abc688f7b273ddf($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    </div>
';
        // 'useprivatecomments' section
        $value = $context->find('useprivatecomments');
        $buffer .= $this->sectionBdeee412df1a1cda756a612d17cca8dc($context, $indent, $value);
        // 'useprotectedcomments' section
        $value = $context->find('useprotectedcomments');
        $buffer .= $this->sectionFbfa4b8db42296acdd236252b6cff714($context, $indent, $value);
        $buffer .= $indent . '                                       
';
        $buffer .= $indent . '                    <input id="commentSubmit" class="owner btn btn-primary mb-1" type="submit" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section3b4fe3b80860f7f97152c24d3f71ce3f($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                    <input id="commentCancel" class="owner btn btn-secondary" type="reset" value="';
        // 'str' section
        $value = $context->find('str');
        $buffer .= $this->section1877ac149e9272cd0928b69539695ac1($context, $indent, $value);
        $buffer .= '" >
';
        $buffer .= $indent . '                </form>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section0ee1f9018e37c0523b39bf3d4d264560(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' point, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' point, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a142aa03c29486cde1fea502b979e46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'pinbild,pdfannotator, {{# str }} point, pdfannotator {{/ str }} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'pinbild,pdfannotator, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0ee1f9018e37c0523b39bf3d4d264560($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0929b5148c204034314cc2cc2d338765(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' rectangle, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' rectangle, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC503213f9f371d74fff5246a50c24b92(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/completion-manual-n,core, {{# str }} rectangle, pdfannotator {{/ str }} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/completion-manual-n,core, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section0929b5148c204034314cc2cc2d338765($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1cc17c06a208a44f14a92494eb78de5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' highlight, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' highlight, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3053077e30b9f35a788e5de47570043(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'text_highlight_picker,pdfannotator, {{# str }} highlight, pdfannotator {{/ str }} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'text_highlight_picker,pdfannotator, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section1cc17c06a208a44f14a92494eb78de5c($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8737177818bf2fc3ed3cc1fe29dacb32(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strikeout, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' strikeout, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9197314633d3527c6554d7211793ac69(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'strikethrough,pdfannotator, {{# str }} strikeout, pdfannotator {{/ str }} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'strikethrough,pdfannotator, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section8737177818bf2fc3ed3cc1fe29dacb32($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF48be688a25fd72a49b6a8b63b83d8ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' text, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' text, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8aba476f7b4eea56e80bfc1156d5581e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'text_color_picker,pdfannotator, {{# str }} text, pdfannotator {{/ str }} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'text_color_picker,pdfannotator, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF48be688a25fd72a49b6a8b63b83d8ef($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3afca0bd70f1e5af6c1a65e520c8f175(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="toolbaritem">
                        <button class="text" type="button" title="{{# str }} text, pdfannotator {{/ str }}" data-tooltype="text">{{# pix }}text_color_picker,pdfannotator, {{# str }} text, pdfannotator {{/ str }} {{/ pix}}</button>
                        <select class="text-size"></select>
                        <div class="text-color"></div>
                    </span>
                    <div class="spacer"></div>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="toolbaritem">
';
                $buffer .= $indent . '                        <button class="text" type="button" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionF48be688a25fd72a49b6a8b63b83d8ef($context, $indent, $value);
                $buffer .= '" data-tooltype="text">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section8aba476f7b4eea56e80bfc1156d5581e($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                        <select class="text-size"></select>
';
                $buffer .= $indent . '                        <div class="text-color"></div>
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                    <div class="spacer"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd6da90567705e5910508fddc4a28372(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' drawing, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' drawing, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1823748bb1fc2047f5cddc99487cba3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editstring,pdfannotator, {{# str }} drawing, pdfannotator {{/ str }} ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editstring,pdfannotator, ';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEd6da90567705e5910508fddc4a28372($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88119086be709e73478a56d7ef0e3664(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="toolbaritem">
                        <button class="pen" type="button" title="{{# str }} drawing, pdfannotator {{/ str }}" data-tooltype="draw">{{# pix }}editstring,pdfannotator, {{# str }} drawing, pdfannotator {{/ str }} {{/ pix}}</button>
                        <select class="pen-size"></select>
                        <div class="pen-color"></div>
                    </span>
                    <div class="spacer"></div>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="toolbaritem">
';
                $buffer .= $indent . '                        <button class="pen" type="button" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionEd6da90567705e5910508fddc4a28372($context, $indent, $value);
                $buffer .= '" data-tooltype="draw">';
                // 'pix' section
                $value = $context->find('pix');
                $buffer .= $this->section1823748bb1fc2047f5cddc99487cba3b($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                        <select class="pen-size"></select>
';
                $buffer .= $indent . '                        <div class="pen-color"></div>
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                    <div class="spacer"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a153e010c43e3a8cab3033f032b5697(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' zoomout, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' zoomout, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8984f749c88855af069f6a7eaa4efe5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' zoomin, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' zoomin, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC07ffbdba8be0329f489eee3e02798a1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' zoom, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' zoom, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC07b2d118fc6c9d06c6379dadcf5541d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' hideAnnotations, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' hideAnnotations, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe79439d1a63d865b1d8efc2028249e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fullscreen,pdfannotator';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'fullscreen,pdfannotator';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF9ff102ffc2891c52921472dfe7b568b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'fullscreen,pdfannotator,{{# str}}fullscreen,pdfannotator{{/str}}';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'fullscreen,pdfannotator,';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionAe79439d1a63d865b1d8efc2028249e8($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf458f0ed146af773eee36c5b61a29ea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' prevPage, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' prevPage, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c5b2e90149fa4ba07f546fdf07c22b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nextPage, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nextPage, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC11c4c8b894ab45caaed55863162f509(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' currentPage, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' currentPage, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f0e12c4f4e4f2f8ad59a2b358457f29(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sumPages, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sumPages, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5cf3605c2d3672d079e12ed025a1e10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' print, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' print, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12c6bb33d5e848ef86c73f37353a7398(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <span class="toolbaritem">
                        <button id="pdfannotator_print_button" class="pdfannotator_print" type="button" title="{{# str }} print, pdfannotator {{/ str }}">
                            <img src=\'{{{pixprintdoc}}}\' alt=\'{{# str }} print, pdfannotator {{/ str }}\'>
                        </button>
                        <div id="myprinturl" hidden>{{printlink}}</div>
                    </span>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <span class="toolbaritem">
';
                $buffer .= $indent . '                        <button id="pdfannotator_print_button" class="pdfannotator_print" type="button" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD5cf3605c2d3672d079e12ed025a1e10($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <img src=\'';
                $value = $this->resolveValue($context->find('pixprintdoc'), $context);
                $buffer .= $value;
                $buffer .= '\' alt=\'';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->sectionD5cf3605c2d3672d079e12ed025a1e10($context, $indent, $value);
                $buffer .= '\'>
';
                $buffer .= $indent . '                        </button>
';
                $buffer .= $indent . '                        <div id="myprinturl" hidden>';
                $value = $this->resolveValue($context->find('printlink'), $context);
                $buffer .= call_user_func($this->mustache->getEscape(), $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                    </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06b4098a0322efe0cce0669729b70dd1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' printwithannotations, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' printwithannotations, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section470f4b34f6e007cabf386ef102691e75(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <button id="pdfannotator_printannotations_button" class="pdfannotator_print" type="button" title="{{# str }} printwithannotations, pdfannotator {{/ str }}">
                        <img src=\'{{{pixprintcomments}}}\' alt=\'{{# str }} printwithannotations, pdfannotator {{/ str }}\'>
                    </button>
                ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <button id="pdfannotator_printannotations_button" class="pdfannotator_print" type="button" title="';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section06b4098a0322efe0cce0669729b70dd1($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <img src=\'';
                $value = $this->resolveValue($context->find('pixprintcomments'), $context);
                $buffer .= $value;
                $buffer .= '\' alt=\'';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section06b4098a0322efe0cce0669729b70dd1($context, $indent, $value);
                $buffer .= '\'>
';
                $buffer .= $indent . '                    </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section261db160e2afc5af39f833d9e4b6aa74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' questionstitle, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' questionstitle, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2f51d5cc0ded11c6d2b22b16577fce6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'allquestionsimgtitle, pdfannotator';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'allquestionsimgtitle, pdfannotator';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57d62bb46624fa98d54d48e0a9fb82a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'questionsimgtitle, pdfannotator';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'questionsimgtitle, pdfannotator';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE2f584fb87bc07e15b7408039647ee58(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' search, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' search, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB8c571c3696321139576b7d6e4f99196(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'search, pdfannotator';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'search, pdfannotator';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d8373915755449f7c59ffca8f6f8e2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' addAComment, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' addAComment, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA13ec5bf253e8f473abc688f7b273ddf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sendAnonymous, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sendAnonymous, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9fb7c77bdd9b9d345455785528f1deb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sendPrivate, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sendPrivate, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBdeee412df1a1cda756a612d17cca8dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="privateDiv" class="row-fluid row">
                        <input type="checkbox" name="visibility" value="private" id="privateCheckbox" class="pdfannotator-radio" style="width:auto;">
                        <label id="privateLabel" for="privateCheckbox">{{# str }} sendPrivate, pdfannotator {{/ str }}</label> {{{privatehelpicon}}}
                    </div>
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div id="privateDiv" class="row-fluid row">
';
                $buffer .= $indent . '                        <input type="checkbox" name="visibility" value="private" id="privateCheckbox" class="pdfannotator-radio" style="width:auto;">
';
                $buffer .= $indent . '                        <label id="privateLabel" for="privateCheckbox">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section9fb7c77bdd9b9d345455785528f1deb9($context, $indent, $value);
                $buffer .= '</label> ';
                $value = $this->resolveValue($context->find('privatehelpicon'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88dc259a8a7bde018889325ea1b3b388(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' sendProtected, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' sendProtected, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFbfa4b8db42296acdd236252b6cff714(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="protectedDiv" class="row-fluid row">
                        <input type="checkbox" name="visibility" value="protected" id="protectedCheckbox" class="pdfannotator-radio" style="width:auto;">
                        <label id="protectedLabel" for="protectedCheckbox">{{# str }} sendProtected, pdfannotator {{/ str }} </label> {{{protectedhelpicon}}}
                    </div>
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div id="protectedDiv" class="row-fluid row">
';
                $buffer .= $indent . '                        <input type="checkbox" name="visibility" value="protected" id="protectedCheckbox" class="pdfannotator-radio" style="width:auto;">
';
                $buffer .= $indent . '                        <label id="protectedLabel" for="protectedCheckbox">';
                // 'str' section
                $value = $context->find('str');
                $buffer .= $this->section88dc259a8a7bde018889325ea1b3b388($context, $indent, $value);
                $buffer .= ' </label> ';
                $value = $this->resolveValue($context->find('protectedhelpicon'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b4fe3b80860f7f97152c24d3f71ce3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' answerButton, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' answerButton, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1877ac149e9272cd0928b69539695ac1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cancelButton, pdfannotator ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' cancelButton, pdfannotator ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
