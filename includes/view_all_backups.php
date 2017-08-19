<a class="btn btn-success btn-lg" href="backup/index.php"><span class="fa fa-database"></span> Backup Database</a>
                    <!--    file bago pumunta sa restore.php   .... import.php-->
                            <table class="table table-hover table-striped table-condensed" id="content_backups">
                                <thead>
                                    <tr>
                                        <th>File Name</th>
                                        <th>Backup Date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $dir = opendir ("./backup/");
                                while (false !== ($file = readdir($dir))){
                                    if (strpos($file,'.sql',1)){

                                        $filename = str_replace('.sql', '', $file);
                                        ?>
                                        <tr>
                                        <td><?= $filename ?> </td>
                                        <td><?= date ("F d Y H:i:s", filectime('./backup/'. $file)) ?></td>

                                        <?php $filepass=urldecode($filename); ?>
                                        <!--<td><a class='btn btn-success' href='backup_exec.php?file=<?= $filepass ?>'>Restore</a></td>-->
                                        <td><a class='btn btn-success' href='#' id="restore_confirm<?= $filepass ?>">Restore</a></td>
                                        </tr>
                            <?php
                                            include("includes/modal_restoreconfirm.php");
                                    }// endif
                                }//endwhile
                              ?>
                                </tbody>
                            </table>
